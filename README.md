[![Latest Stable Version](https://poser.pugx.org/crazycodr/standard-exceptions/version.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Total Downloads](https://poser.pugx.org/crazycodr/standard-exceptions/downloads.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Build Status](https://travis-ci.org/crazycodr/standard-exceptions.png?branch=master)](https://travis-ci.org/crazycodr/standard-exceptions)

Standard Exception Package
==========================
This project is aimed at providing additional standard exceptions to php. Many exceptions that are missing from the SPL are constantly being reproduced in different projects. By providing a package of high-quality, well organised exceptions, it will, in the long run, increase interoperability between projects and libraries.

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

Upgrading from Version1 to Version2
===================================
See [Changes page](CHANGES.md)

New exceptions and namespaces
=============================
There are many missing runtime exceptions in the default SPL package. Many exceptions that we often see re-created over and over again and it does not make sense to do that. Apart from SQL Query writing, exception writing is possibly the most annoying and useless thing to do when writing software. If we can alleviate that by providing a more complete set of finer grained exceptions, it will be beneficial to all PHP programmers out there.

Namespace structure
-------------------
- Exceptions
    - Collection
    - Data
    - Generic
    - Http
    - IO
        - Filesystem
        - Network
    - Operation

Collection exceptions
---------------------
There are many array/collection based operations out there, collections classes, array access objects, iterators, etc. Why aren't there any exceptions related to array/collection manipulations? Does everything pertain to \RuntimeException? This whole branch of exceptions will focus on providing clear and concise, finer grained exceptions for non-native collection/array manipulations.

- Collection
    - EmptyException
    - FullException
    - KeyNotFoundException
    - KeyAlreadyExistsException
    - ReadOnlyCollectionException
    - ReadOnlyCollectionItemException

Data exceptions
---------------
Data exceptions pertain to all the validation aspect of data and the operations associated to it. They are not stored as `Validation\` exceptions because they do not pertain to validation frameworks but to the integrity and validity of data.

- Data
    - FormatException
    - IntegrityException
    - NotFoundException
    - TooManyFoundException
    - TypeException
    - UnauthorizedException
    - ValidationException

Http exceptions
---------------
Many frameworks and applications redefine Http exceptions that map to Http status codes. These should not be redefined or they become different accross two projects and portability of your code suffers. This namespace contains most if not all Http exceptions you'll ever need.

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

IO exceptions
-------------
There are many applications, libraries or framework that throw IO related exceptions such as FileNotFoundException or ConnectionLostException. It was imperative to create such a namespace too stop reproducing these exceptions. This namespace contains tons of exceptions related to FileSystem or Network operations!

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

- Operation
    - InvalidOperationException
    - NotImplementedException
    - UnexpectedException

Tagging exceptions
==================
Most of the time, an exception may convey he same means as another exception but just not the same context. For example:

- Collection\KeyNotFoundException (In memory)
- Data\NotFoundException (In a database or storage engine)
- Http\Client\NotFoundException (On a web service)
- IO\Filesystem\DirectoryNotFoundException (In the filesystem)
- IO\Filesystem\FileNotFoundException (In the filesystem)
- IO\Network\UnknownHostException (On the web)

These all mean the same thing, you tried to do something on a resource but the underlying code **failed to find the resource** to act upon. What happens if you want to abstract an operation behind multiple providers that can act differently? Will you catch each exception and treat them separately? You should not, or you'll end up duplicating your code. Tags to the rescue!

The `Tag\` namespace will contain different interfaces that help you convey the same means to your exceptions. So even if you throw a `FileNotFoundException`, your users can react on `Tag\NotFoundException` and still catch anything that can be thrown at them regarding something was not found while processing the request. Now **that is interoperability**. For now, the different tags that exist are:

- InvalidDataException
- NotFoundException

Contribution notes
==================
Don't hesitate to contribute to this package, propose new exceptions to be pushed to the standard package. Don't hesitate to trigger discussions in the project as we want the best possible standard exception library. Nothing is perfect, everyone has different views, this project is for everyone!