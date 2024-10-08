# Helpers

There are a few helpers available. They range from storage of contextual data to rethrowing exceptions, read on!

## DefaultsInterface

All exceptions from this package implement this helper. This first helper defines that all exceptions must define a `getDefaultMessage` and a `getDefaultCode`. This allows you to get the default message and default code using a static call on the exception class like so:

```php
$exceptionMessage = \Exceptions\Some\Thing::getDefaultMessage();
$exceptionCode = \Exceptions\Some\Thing::getDefaultCode();
```
