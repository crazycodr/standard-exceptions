# Usage patterns

## Throwing non-generic exceptions

Throwing an exception seems trivial but a lot of people often do following error: Throw a more generic exception and set a custom error message on it.

While this might seem like a good approach, it isn't. If you do so, another piece of code cannot whole fully understand the reason why you are throwing an exception.

When throwing exceptions, you should throw domain exceptions. This means that if you have a file not found in regard to a certain process such as a configuration file, you could throw a simple `FileNotFoundException` but what you should to is throw a `ConfigurationFileNotFoundException` as such:

```php
class ConfigurationFileNotFoundException 
    extends FileNotFoundException {
}
```

When you do this, you create a sub classification of `FileNotFoundException` that anyone can catch, but you create a more defined context for your module that people can use to understand what went wrong at the right moment.

## Access to defaults

To make things normalized, all exceptions implement the [DefaultsInterface](../Helpers/DefaultsInterface.php). This interface allows easy static retrieval of core data of each exception:

- `getDefaultMessage()`: Returns the default message of the exception.
- `getDefaultCode()`: Returns the default error code, in case of http errors, this is usually the http status code.

You do not need to use this when throwing exceptions as the constructor of every exception in this package will automatically resolve the message and code using these functions for you.

If you create new exceptions and need to override an exception's message, you can define a different message in the constant `MESSAGE` of the exception, or you can override `getDefaultMessage`:

```php
class ConfigurationFileNotFoundException extends FileNotFoundException
{
    public const MESSAGE = 'The configuration file was not found';
    public const CODE = 108851;
}
```

## Rethrowing and nesting exceptions

While it seems logical to rethrow exceptions and catch them higher up in your code, doing so is against proper coding practices because all consumers of a module should not be aware of the modules under it. This means you should always rethrow exceptions by nesting them under another exception and limit the scope they express to something that you can express.

To nest an exception, use named parameters like depicted below:

```php
try {
    // do something
} catch (NestedExceptionType $ex) {
    throw new DomainException(previous: $ex);
}
```

For example, a `YamlLoader` fails to parse a file, your `ConfigurationLoader` should not throw the format or parsing exception that the yaml loader throws, it should instead throw your own exception such as `ConfigurationParsingException`.

```php
try {
    Try to parse a yaml configuration file
} catch (YamlParsingException $ex) {
    throw new ConfigurationParsingException(previous: $ex);
}
```

## Adding details to your exception

While it might seem common or useful, most exceptions do not carry extra information around because they usually are not useful. Most exceptions being abortions of a process, knowing why something fails should be expressed by the intent that the exception represents and the moment when an exception occurs, not by reading underlying data.

Nonetheless, if you want to add custom data to your exceptions, do it properly by respecting the original exception pattern. Your exception does not need to allow overriding messages and codes, but you must support previous exceptions so that nesting can be done properly.

That being said, your constructor should look something like this:

```php
public function __construct(
    private readonly string $customData, 
    null|Throwable $previous = null
) {
    parent::__construct(previous: $previous);
}
```

By doing so, you allow your exception to support `customData`, readonly at the same time, and you still support `previous` exceptions.
