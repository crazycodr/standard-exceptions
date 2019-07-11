# Helpers

There are a few helpers available. They range from storage of contextual data to rethrowing exceptions, read on!

## DefaultsInterface

All exceptions from this package implement this helper. This first helper defines that all exceptions must define a `getDefaultMessage` and a `getDefaultCode`. This allows you to get the default message and default code using a static call on the exception class like so:

```php
$exceptionMessage = \Exceptions\Some\Thing::getDefaultMessage();
$exceptionCode = \Exceptions\Some\Thing::getDefaultCode();
```

> The value of these functions is doubtful until you start using the next helper

## DefaultConstructorTrait

All exceptions from this package implement this helper. This second helper helps you override the constructor of your exception by defining default values for your constructor and if nothing is passed, then, it will use the `getDefaultMessage` and `getDefaultCode` from the previous helper for you.

> The value of this helper is interesting but really shines with the last helper!

## FromException trait

All exceptions from this package implement this helper. This third helper defines a static method on the exception you want to throw a new copy of itself using the previous helpers `getDefaultMessage` and `getDefaultCode`. The advantage is this method allows you to pass another exception to be set into the `$previousException` parameter that is always 3rd.

This allows you to easily throw chains of exceptions without knowing the default message and code of that exception you want to throw. Example:

```php
} catch (SomeException $ex){
    throw \Exceptions\Some\Thing::from($ex);
}
```

The other approach to this, without using `from()` looks like this:

```php
} catch (SomeException $ex){
    throw new \Exceptions\Some\Thing(
        \Exceptions\Some\Thing::getDefaultMessage(),
        \Exceptions\Some\Thing::getDefaultCode(),
        $ex
    );
}
```

Or even worst, if you don't use the defaults helpers, you have to hard code the message and code yourself:

```php
} catch (SomeException $ex){
    throw new \Exceptions\Some\Thing(
        'An error occured because of something',
        19985,
        $ex
    );
}
```

This clearly shows the advantage of the `FromException` trait.

## WithContext trait

All exceptions from this package implement this helper. This helper defines a static method on the exception you want to throw to attach contextual data to it before throwing it. You can use the `withContext` method to generate an exception with some data and the use `getContext` to retrieve it.

For example:

```php
throw new \Exceptions\Some\Thing::withContext(['some' => 'data'])
```

To retrieve the data:

```php
} catch(\Exceptions\Some\Thing $ex) {
    var_dump($ex->getContext());
}