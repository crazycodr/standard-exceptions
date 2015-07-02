[![Latest Stable Version](https://poser.pugx.org/crazycodr/standard-exceptions/version.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Total Downloads](https://poser.pugx.org/crazycodr/standard-exceptions/downloads.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Build Status](https://travis-ci.org/crazycodr/standard-exceptions.png?branch=master)](https://travis-ci.org/crazycodr/standard-exceptions)

> I have created a PSR Draft related to this library. It would be a cleaner and simpler library with many less exceptions. Furthermore it would not focus on SPL backward compatibility, it would seek to replace existing SPL exceptions per se if they just don't map.

> Check out [The PSR standard fork](https://github.com/crazycodr/fig-standards/blob/master/proposed/exception-base-library.md) i made relative to that.

Standard Exception Package
==========================
This project is aimed at providing additional standard exceptions to php. Many exceptions that are missing from the SPL are constantly being reproduced in different projects. By providing a package of high-quality, well organised exceptions, it will, in the long run, increase interroperability between projects.

Another use for this package is to clean up the existing exceptions that are unclear due to their indescriptive naming. Just look at this documentation bug for an understanding of the issue:

- http://stackoverflow.com/questions/1102979/when-would-you-throw-a-domainexception-in-php
- http://stackoverflow.com/questions/14171714/php-runtime-or-logic-exception

Re-classification of existing exceptions
========================================
The existing exceptions are extended but stored in a new namespace tree that allows a better organisation of the different exceptions. Thus, if someone switches to the standard exception package, it should be backward compatible automatically.

Existing exceptions
-------------------
- Exception
  - LogicException
    - BadFunctionCallException & BadMethodCallException
    - DomainException
    - InvalidArgumentException
    - LengthException
    - OutOfRangeException
  - RuntimeException
    - OutOfBoundsException
    - OverflowException
    - RangeException
    - UnderflowException
    - UnexpectedValueException

Proposed namespace structure
----------------------------
- Exceptions (namespace)
  - Array (namespace)
  - IO (namespace)
  - Logic (namespace)
  - HTTP (namespace)
  - Operation (namespace)
  - Validation (namespace)

Proposed class tree
-------------------
- StandardExceptions (namespace)

  - ArrayExceptions (namespace)
    - ArrayIsEmptyException
    - ArrayIsFullException
    - ArrayUnderflowException
    - IndexNotFoundException
    - InvalidKeyException
    - KeyAlreadyExistsException
    - KeyNotFoundException
    - ReadOnlyArrayException
    - ReadOnlyArrayItemException

  - IOExceptions (namespace)
    - ConnectionLostException
    - ConnectionRefusedException
    - DirectoryNotFoundException
    - DirectoryNotReadableException
    - DirectoryNotWritableException
    - FileNotFoundException
    - FileNotReadableException
    - FileNotWritableException
    - NotADirectoryException
    - NotAFileException
    - UnexpectedResponseException
    - UnknownHostException

  - LogicExceptions (namespace)
    - IllegalArgumentTypeException
    - IllegalValueException

  - OperationExceptions (namespace)
    - BadFunctionCallException
    - BadMethodCallException
    - InvalidOperationException
    - NotImplementedYetException
    - OverflowException
    - UnexpectedReturnValueException

  - HTTPExceptions (namespace)
    - BadRequestException
    - ForbiddenException
    - MethodNotAllowedException
    - NotAcceptableException
    - NotFoundException
    - UnauthorizedAccessException
    - UnprocessableEntityException

  - ValidationExceptions (namespace)
    - IncorrectLengthException
    - InvalidBooleanException
    - InvalidDateTimeException
    - InvalidDateTimeFormatException
    - InvalidEmailFormatException
    - InvalidFormatException
    - InvalidIPAddressFormatException
    - InvalidJSONFormatException
    - InvalidLengthException
    - InvalidNumberException
    - InvalidPostalCodeFormatException
    - InvalidRegexFormatException
    - InvalidStringException
    - InvalidValueException
    - InvalidXMLFormatException

Automatically deprecated exceptions
-----------------------------------
- ArrayUnderflowException in favor of ArrayIsEmptyException
- BadMethodCallException in favor of BadFunctionCallException
- BadFunctionCallException in favor of InvalidOperationException
- IllegalValueException in favor of InvalidValueException
- IncorrectLengthException in favor of InvalidLengthException
- IndexNotFoundException in favor of KeyNotFoundException

New exceptions and namespaces
=============================
There are many missing runtime exceptions in the default spl package. Many exceptions that we often see re-created over and over again and it doesn't make sense to do that. Apart from SQL Query writting, exception writing is possibly the most annoying and useless thing to do when writing software. If we can alleviate that by providing a more complete set of finer grained exceptions, it will be beneficial to all php programmers out there.

InvalidValueException as RangeException
---------------------------------------
Lets face it, RangeException is an highly unortodox name to use for domain validation that failed at runtime. This package will feature a whole branch dedicated at providing invalid value exceptions as runtime exceptions and the first and topmost one is the InvalidValueException.

Array exceptions
----------------
There are many array based operations out there, collections classes, array access objects, iterators, etc. Why aren't there any exceptions related to array manipulations? Does everything pertain to \RuntimeException? This whole branch of exceptions will focus on providing clear and concise, finer grained exceptions for Array manipulations.

IO exceptions
-------------
There are so many applications or framework that actually throw IO related exceptions such as connection failures, connection loss, connection interruption, file not found, file not writable, etc. These examples can apply to all sorts of IO based operations be it files, databases, servers, web services, and more... Yet, there are no exceptions governing all this... none at all!

Operation exceptions
--------------------
How many times have you thrown a \RuntimeException or a simple \Exception when something didn't work out correctly? Calling a function incorrectly, or when a behavior doesn't end up too well should return something more precise than \RuntimeException. Operation exceptions are there for that. Anything that goes wrong? Throw an Operation exception that matches what went wrong.

HTTP exceptions
---------------
There are many cases in which applications want to tell the upper code that something went wrong regarding the HTTP request that was issued. In many cases, these classes are request parsers, format negotiators and so on talking to their controllers. These classes need to report that something went wrong, but InvalidOperationException is just not enough and ValidationExceptions or ArrayExceptions are not suited for this. In this very case, using the HTTPExceptions is the right path to go.

Just remember not to use HTTPExceptions in a validator, remember, a validator can be used in another context...

Validation exceptions
---------------------
There are many validation functions or libraries, but each throw their own exceptions or return boolean values depending on the style of validation they adopt. The validation exceptions should be used to provide a standard set of validation exceptions thrown back by these validation systems such as InvalidEmailException, InvalidFormatException, InvalidPostalCodeException, etc.

Contribution notes
==================
Don't hesitate to contribute to this package, propose new exceptions to be pushed to the standard package. Don't hesitate to trigger discussions in the project as we want the best possible standard exception library. Nothing is perfect, everyone has different views, this project is for everyone!
