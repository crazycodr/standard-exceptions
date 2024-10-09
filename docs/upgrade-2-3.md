# Changes between version 2 and version 3

Below is a list of changes between version 2 and version 3. You can refer to this list to know what you should be replacing with what. This is a comprehensive list of all the changes. 

There are several pattern differences between version 2 and 3 which will be discussed below.

# Testing strategy

Testing has been completely removed because there isn't really anything to test. 

Previous tests were used to ensure that the dependencies between exceptions didn't change but that should be handled through reviews.

Because there are no features to actually test, tests have been removed. This doesn't mean the library can't be proved as stable, it is stable but there is nothing to test.

The only build status we can now infer will be the linting status.

# Pattern changes and possible breaking changes

## Type constraints

By moving to PHP 8, every method and constructor has been upgraded to have argument and return types.

This might have issues if you improperly used `$message` or `$code` in your exceptions because these are now `string` and `int` based.

## Scope definitions

Every constant and method have been officially declared `public` like they should have been. Unless you willfully went against this by making certain methods or constant `protected` or `private`, this should not have any consequence.

## Helpers completely removed

There were different helpers that existed previously to facilitate certain patterns such as nesting and rethrowing, allowing contextual data and such. 

> Except for the defaults helper which is a base interface to enable easier access to messages and codes, all helpers have been removed.

### From helper

This helper was used to simplify nesting and rethrowing but isn't necessary in PHP 8. We can easily rethrow an exception into a new one by using named parameters. Therefore, you should convert all existing use cases from:

```php
try {
    // do something
} catch (NestedExceptionType $ex) {
    throw DomainException::from($ex); 
}
```

To the following format:

```php
try {
    // do something
} catch (NestedExceptionType $ex) {
    throw new DomainException(previous: $ex);
}
```

## Context helper

This helper was used to add contextual data easily to any exception. This goes against proper type safety practices, so it was removed. 

The data stored in an exception is often misused or unnecessary because the exception itself and the location you catch the error should be enough to understand the context. The fact it wasn't typed is worst because it means you need to type cast it, but it doesn't prevent errors from happening if the underlying module throwing forgot to attach data or changed the structure.

Instead of doing this:

```php
throw ContextualException::withContext($data, ...);
```

Change to the following format:

```php
class ContextualException extends ... {
  public function __construct(
      private readonly string $customData, 
      null|Throwable $previous = null
  ) {
      parent::__construct(previous: $previous);
  }
}

throw new ContextualException($data);
// or
throw new ContextualException(customData: $data, previous: $ex);
```

## Http exception factory

This factory was introduced late into version 2 to help people generate the appropriate HTTP exception based on a classic HTTP status code that you would return. This is now proscribed as it goes against the concepts of domain driven exceptions.

When an exception is thrown, the module throwing it expresses a reason for improperly working. It should not be throwing an HTTP exception unless it is running in the context of an HTTP transaction. This means that only a controller should actually know about HTTP status codes. Underlying code in your services or data layer should throw non HTTP contextual exceptions that get transformed into an HTTP exception or message in the end.

There is no replacement for this, you will have to look at best practices for your framework on how to properly set up an exception management module that transforms domain exceptions into errors. What you should consider is using [tags](tags.md).

# Exceptions that have been replaced

The following exceptions or tags have been replaced with a new item. All of these were originally deprecated and have been officially removed from the codebase.

| Old                                 | New                             |
|-------------------------------------|---------------------------------|
| Exceptions\Tag\ExistsTag            | Exceptions\Tag\AlreadyExistsTag |
| Exceptions\Tag\InvalidDataException | Exceptions\Tag\InvalidDataTag   |
| Exceptions\Tag\NotFoundException    | Exceptions\Tag\NotFoundTag      |

# Exceptions, tags and helpers that have disappeared without a replacement

Certain classes simply disappeared, see the [patterns](patterns.md) this package suggests to overcome the loss of these files.

- Exceptions\Helpers\DefaultConstructorTrait
- Exceptions\Helpers\FromException
- Exceptions\Helpers\HttpExceptionFactory
- Exceptions\Helpers\WithContext
- Exceptions\Http\Client\ImATeapotException
- Exceptions\Http\Client\RequestEntityTooLargeException
- Exceptions\Http\Client\RequestedRangeNotSatisfiableException
- Exceptions\Tag\AbortedTag
- Exceptions\Tag\OperationAbortedException
