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

Proposed structure based on namespacing
---------------------------------------
- Exceptions (namespace)
  - Callback (namespace)
    - BadFunctionCallException extends \BadFunctionCallException
    - BadMethodCallException extends \BadMethodCallException
  - InvalidCode (namespace)
    - IllegalValueException extends \DomainException
    - IllegalArgumentTypeException extends \InvalidArgumentException
  - Runtime (namespace)
    - ValueOverflowException extends \OverflowException
    - UnexpectedReturnValueException extends \UnexpectedValueException
    - InvalidOperationException
      - ArrayAlreadyEmptyException extends \UnderflowException
    - InvalidIndexException extends \OutOfRangeException
    - InvalidKeyException extends \OutOfBoundsException
    - InvalidValueException extends \RangeException
      - InvalidLengthException
    - IncorrectLengthException extends \LengthException

Idiocracies
-----------
The LengthException which should theorically be an InvalidValueException/RangeException due to it's validation use stays in the old logic exception branch. Since the IncorrectLengthException is used to map to LengthException, it cannot be under InvalidValueException although it should. To fix this, \Exceptions\Runtime\IncorrectLengthException will be automatically marked @deprecated in favor of \Exceptions\Runtime\InvalidLengthException.

Automatically deprecated exceptions
-----------------------------------
\Exceptions\Callback\BadMethodCallException in favor of \Exceptions\Callback\BadFunctionCallException
\Exceptions\InvalidCode\IllegalValueException in favor of \Exceptions\Runtime\InvalidValueException
\Exceptions\Runtime\InvalidKeyException in favor of \Exceptions\Runtime\InvalidIndexException
\Exceptions\Runtime\IncorrectLengthException in favor of \Exceptions\Runtime\InvalidLengthException

New exceptions and namespaces
=============================
There are many missing runtime exceptions in the default spl package. Many exceptions that we often see re-create over and over again and it doesn't make sense to do that. Apart from SQL Query writting, exception writing is possibly the most annoying and useless thing to do when writing software. If we can alleviate that by providing a more complete set of finer grained exceptions, it might be beneficial to all php programmers out there.

InvalidValueExceptions as RangeException
----------------------------------------
Lets face it, RangeException is an highly unortodox name to use for domain validation that failed at runtime. This package will feature a whole branch dedicated at providing invalid value exceptions as runtime exceptions.

IOExceptions
------------
How many applications or framework actually throw IO related exceptions such as connection failures, connection loss, connection interrupted, file not found, file not writable... These can apply to all sorts of IO based operations be it files, databases, servers, web services, and more. Yet, there are no exceptions governing all this... none at all!

Contribution notes
==================
Don't hesitate to contribute to this package, propose new exceptions to be pushed to the standard package. Don't hesitate to trigger discussions in the project as we want the best possible standard exception library. Nothing is perfect, everyone has different views, this project is for everyone!
