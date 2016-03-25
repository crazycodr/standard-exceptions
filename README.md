[![Latest Stable Version](https://poser.pugx.org/crazycodr/standard-exceptions/version.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Total Downloads](https://poser.pugx.org/crazycodr/standard-exceptions/downloads.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Build Status](https://travis-ci.org/crazycodr/standard-exceptions.png?branch=master)](https://travis-ci.org/crazycodr/standard-exceptions)

Standard Exception Package
==========================
This project is aimed at providing additional standard exceptions to php. Many exceptions that are missing from the SPL are constantly being reproduced in different projects. By providing a package of high-quality, well organised exceptions, it will, in the long run, increase interroperability between projects and libraries.

Installation and usage
======================
Install `Standard Exceptions` using Composer.

```
$ composer require crazycodr/standard-exceptions
```

And then just throw them

```php
throw new \Exceptions\Data\NotFoundException();
```

New exceptions and namespaces
=============================
There are many missing runtime exceptions in the default SPL package. Many exceptions that we often see re-created over and over again and it doesn't make sense to do that. Apart from SQL Query writting, exception writing is possibly the most annoying and useless thing to do when writing software. If we can alleviate that by providing a more complete set of finer grained exceptions, it will be beneficial to all PHP programmers out there.

Namespace structure
-------------------
- Exceptions
    - Collection
    - Http
    - Data
    - IO
        - Filesystem
        - Network
    - Logic
    - Operation
    - Validation
    
> Note: Standard Exceptions 1 used the namespace `StandardExceptions\`. If you are moving from version 1 to version 2, do a search and replace for `StandardExceptions\` to `Exceptions\`. Also note that all namespaces have been shortened by removing `Exceptions` from the namespace name. (Ex `ValidationExceptions\` to `Validation\`)

Collection exceptions
---------------------
There are many array/collection based operations out there, collections classes, array access objects, iterators, etc. Why aren't there any exceptions related to array/collection manipulations? Does everything pertain to \RuntimeException? This whole branch of exceptions will focus on providing clear and concise, finer grained exceptions for non-native collection/array manipulations.

> Note: Standard Exceptions 1 used the namespace `ArrayExceptions\`, this term has been replaced with `Collection` because `Array` is a **reserved keyword** and referred to the native PHP array which was never the use case.

- Collection
    - EmptyException
    - FullException
    - KeyNotFoundException
    - KeyAlreadyExistsException
    - ReadOnlyCollectionException
    - ReadOnlyCollectionItemException
    
> Note: Standard Exceptions 1 defined `InvalidKeyException` in the `ArrayExceptions\` namespace, this has been moved to the `Validation\` namespace.
    
> Note: Standard Exceptions 1 made `KeyNotFoundException` extend the native PHP `OutOfBoundsException`, this has been moved to the `BaseException` which is a `RuntimeException`.

Http exceptions
---------------
Many frameworks and applications redefine Http exceptions that map to Http status codes. These should not be redefined or they become different accross two projects and portability of your code suffers. This namespace contains most if not all Http exceptions you'll ever need.
    
> Note: Standard Exceptions 1 used the namespace `HTTPExceptions\`, this has been renamed to `Http\` and new sub namespaces have been added to it: `Client\` and `Server\`. Each sub namespace map to a general class of Http status codes 4xx and 5xx.

- Http
    - BaseException
    - BaseExceptionInterface
    - Client
        - ClientErrorException
        - ClientErrorExceptionInterface
        - BadRequestException (400)
        - UnauthorizedException (401)
        - ForbiddenException (403)
        - NotFoundException (404)
        - MethodNotAllowedException (405)
        - NotAcceptableException (406)
        - ConflictException (409)
        - RequestEntityTooLargeException (413)
        - UnsupportedMediaTypeException (415)
        - RequestedRangeNotSatisfiableException (416)
        - UnprocessableEntityException (422)
    - Server
        - ServerErrorException
        - ServerErrorExceptionInterface
        - InternalServerErrorException (500)
        - NotImplementedException (501)
        - ServiceUnavailableException (503)

Data exceptions
--------------

IO exceptions
-------------
There are many applications, libraries or framework that throw IO related exceptions such as FileNotFoundException or ConnectionLostException. It was imperative to create such a namespace too stop reproducing these exceptions. This namespace contains tons of exceptions related to FileSystem or Network operations!
    
> Note: Standard Exceptions 1 used the namespace `IOExceptions\`, this has been renamed to `IO\` and new sub namespaces have been added to it: `Filesystem\` and `Network\`.

- IO
    - Filesystem
        - DirectoryNotFoundException
        - DirectoryNotReadableException
        - DirectoryNotWritableException
        - FileNotFoundException
        - FileNotReadableException
        - FileNotWritableException
        - NotADirectoryException
        - NotAFileException
    - Network
        - ConnectionLostException
        - ConnectionRefusedException
        - UnexpectedResponseException
        - UnknownHostException

Operation exceptions
--------------------
How many times have you thrown a \RuntimeException or a simple \Exception when something didn't work out correctly? Calling a function incorrectly, or when a behavior doesn't end up too well should return something more precise than \RuntimeException. Operation exceptions are there for that. Anything that goes wrong? Throw an Operation exception that matches what went wrong.

Validation exceptions
---------------------
There are many validation functions or libraries, but each throw their own exceptions or return boolean values depending on the style of validation they adopt. The validation exceptions should be used to provide a standard set of validation exceptions thrown back by these validation systems such as InvalidEmailException, InvalidFormatException, InvalidPostalCodeException, etc.