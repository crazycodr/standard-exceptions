# IO filesystem exceptions

There are many applications, libraries or framework that throw IO related exceptions such as the very common FileNotFoundException or ConnectionLostException. It was imperative to create such a namespace to stop reproducing these exceptions. This namespace contains tons of exceptions related to FileSystem or Network operations!

This document details filesystem IO exceptions such as files not found or disk permission errors.

## Classes

Namespaces: `\Exceptions\IO` and `\Exceptions\IO\Filesystem`

Base classs: `\Exceptions\IO\IOException` and `\Exceptions\IO\Filesystem\FilesystemErrorException`

Base interfaces: `\Exceptions\IO\IOExceptionInterface` and `\Exceptions\IO\Filesystem\FilesystemErrorExceptionInterface`

Exceptions:

* DirectoryAlreadyExistsException
* DirectoryNotFoundException
* DirectoryNotReadableException
* DirectoryNotWritableException
* FileAlreadyExistsException
* FileNotFoundException
* FileNotReadableException
* FileNotWritableException
* NoMoreSpaceException
* NotADirectoryException
* NotAFileException

### DirectoryAlreadyExistsException

Tags: `\Exceptions\Tag\ExistsTag`



---

### DirectoryNotFoundException

Tags: `\Exceptions\Tag\NotFoundTag`



---

### DirectoryNotReadableException

Tags: `\Exceptions\Tag\ForbiddenTag`



---

### DirectoryNotWritableException

Tags: `\Exceptions\Tag\ForbiddenTag`



---

### FileAlreadyExistsException

Tags: `\Exceptions\Tag\ExistsTag`



---

### FileNotFoundException

Tags: `\Exceptions\Tag\NotFoundTag`



---

### FileNotReadableException

Tags: `\Exceptions\Tag\ForbiddenTag`



---

### FileNotWritableException

Tags: `\Exceptions\Tag\ForbiddenTag`



---

### NoMoreSpaceException

Tags: `\Exceptions\Tag\AbortedTag`



---

### NotADirectoryException

Tags: `\Exceptions\Tag\InvalidDataTag`



---

### NotAFileException

Tags: `\Exceptions\Tag\InvalidDataTag`