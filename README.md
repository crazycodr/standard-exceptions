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
  - Operation (namespace)
  - Validation (namespace)

Proposed class tree
-------------------
- Exceptions (namespace)

  - Array (namespace)
    - ArrayUnderflowException
    - ArrayIsEmptyException
    - ArrayIsFullException
    - IndexNotFoundException
    - InvalidKeyException
    - KeyAlreadyExistsException
    - KeyNotFoundException
    - ReadOnlyArrayException
    - ReadOnlyArrayItemException

  - IO (namespace)
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

  - Logic (namespace)
    - IllegalArgumentTypeException
    - IllegalValueException

  - Operation (namespace)
    - BadFunctionCallException
    - BadMethodCallException
    - InvalidOperationException
    - NotImplementedYetException
    - UnexpectedReturnValueException
    - OverflowException

  - Validation (namespace)
    - IncorrectLengthException
    - InvalidDateTimeException
    - InvalidEmailException
    - InvalidFormatException
    - InvalidIPAddressException
    - InvalidJSONException
    - InvalidLengthException
    - InvalidNumberException
    - InvalidPostalCodeException
    - InvalidRegexException
    - InvalidValueException
    - InvalidXMLException

Automatically deprecated exceptions
-----------------------------------
- BadMethodCallException in favor of BadFunctionCallException
- IllegalValueException in favor of InvalidValueException
- ArrayUnderflowException in favor of ArrayIsEmptyException
- IncorrectLengthException in favor of InvalidLengthException
- InvalidIndexException in favor of InvalidKeyException

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

Validation exceptions
---------------------
There are many validation functions or libraries, but each throw their own exceptions or return boolean values depending on the style of validation they adopt. The validation exceptions should be used to provide a standard set of validation exceptions thrown back by these validation systems such as InvalidEmailException, InvalidFormatException, InvalidPostalCodeException, etc.

Contribution notes
==================
Don't hesitate to contribute to this package, propose new exceptions to be pushed to the standard package. Don't hesitate to trigger discussions in the project as we want the best possible standard exception library. Nothing is perfect, everyone has different views, this project is for everyone!