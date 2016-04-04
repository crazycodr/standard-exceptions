[![Latest Stable Version](https://poser.pugx.org/crazycodr/standard-exceptions/version.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Total Downloads](https://poser.pugx.org/crazycodr/standard-exceptions/downloads.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Build Status](https://travis-ci.org/crazycodr/standard-exceptions.png?branch=master)](https://travis-ci.org/crazycodr/standard-exceptions)

Standard Exception Package
==========================
This project is aimed at providing additional standard exceptions to php. Many exceptions that are missing from the SPL are constantly being reproduced in different projects. By providing a package of high-quality, well organised exceptions, it will, in the long run, increase interroperability between projects and libraries.

Changes between version 1 and version 2
=======================================

Namespace rename or change
--------------------------
| Old | New |
| --- | --- |
| StandardExceptions | Exceptions |
| ArrayExceptions | Collection |
| HTTPExceptions | Http |
| IOExceptions | IO |
| LogicExceptions | Operation |
| OperationExceptions | Operation |
| ValidationExceptions | Data |

Namespace that have disapeared
------------------------------
- LogicExceptions

New namespaces
--------------
- Http\Client
- Http\Server
- IO\Filesystem
- IO\Network

Exceptions that have moved or renamed
-------------------------------------
| Old | New |
| --- | --- |
| ArrayExceptions\ArrayIsEmptyException | Collection\EmptyException |
| ArrayExceptions\ArrayIsFullException | Collection\FullException |
| HTTPExceptions\BadRequestException | Http\Client\BadRequestException |
| HTTPExceptions\ForbiddenException | Http\Client\ForbiddenException |
| HTTPExceptions\MethodNotAllowedException | Http\Client\MethodNotAllowedException |
| HTTPExceptions\NotAcceptableException | Http\Client\NotAcceptableException |
| HTTPExceptions\NotFoundException | Http\Client\NotFoundException |
| HTTPExceptions\UnauthorizedException | Http\Client\UnauthorizedException |
| HTTPExceptions\UnprocessableEntityException | Http\Client\UnprocessableEntityException |
| IOExceptions\DirectoryNotFoundException | IO\Filesystem\DirectoryNotFoundException |
| IOExceptions\DirectoryNotReadableException | IO\Filesystem\DirectoryNotReadableException |
| IOExceptions\DirectoryNotWritableException | IO\Filesystem\DirectoryNotWritableException |
| IOExceptions\FileNotFoundException | IO\Filesystem\FileNotFoundException |
| IOExceptions\FileNotReadableException | IO\Filesystem\FileNotReadableException |
| IOExceptions\FileNotWritableException | IO\Filesystem\FileNotWritableException |
| IOExceptions\NotADirectoryException | IO\Filesystem\NotADirectoryException |
| IOExceptions\NotAFileException | IO\Filesystem\NotAFileException |
| IOExceptions\ConnectionLostException | IO\Network\ConnectionLostException |
| IOExceptions\ConnectionRefusedException | IO\Network\ConnectionRefusedException |
| IOExceptions\UnexpectedResponseException | IO\Network\UnexpectedResponseException |
| IOExceptions\UnknownHostException | IO\Network\UnknownHostException |
| OperationExceptions\NotImplementedYetException | Operation\NotImplementedException |
| OperationExceptions\UnexpectedReturnValueException | Operation\UnexpectedException |

Exceptions that have disapeared
-------------------------------
- ArrayExceptions\ArrayUnderflowException (Was deprecated, use Collection\EmptyException instead)
- ArrayExceptions\IndexNotFoundException (Was deprecated, use Collection\KeyNotFoundException instead)
- ArrayExceptions\InvalidKeyException (Changed for Data\FormatException)
- ArrayExceptions\ItemNotFoundException (Changed for Data\NotFoundException)
- LogicExceptions\IllegalArgumentTypeException (Was deprecated, use Data\TypeException)
- LogicExceptions\IllegalValueException (Was deprecated, use Data\ValidationException)
- OperationExceptions\BadFunctionCallException (Was deprecated, use Operation\InvalidOperationException)
- OperationExceptions\BadMethodCallException (Was deprecated, use Operation\InvalidOperationException)
- OperationExceptions\OverflowException (Use SPL instead)
- ValidationExceptions have been replaced with:
    - Data\FormatException
    - Data\IntegrityException
    - Data\TypeException
    - Data\ValidationException

New exceptions
--------------
- Data\FormatException
- Data\IntegrityException
- Data\NotFoundException
- Data\TypeException
- Data\ValidationException
- Http\Client\ConflictException
- Http\Client\RequestedRangeNotSatisfiableException
- Http\Client\RequestEntityTooLargeException
- Http\Client\UnsupportedMediaTypeException
- Http\Server\InternalServerErrorException
- Http\Server\NotImplementedException
- Http\Server\ServiceUnavailableException