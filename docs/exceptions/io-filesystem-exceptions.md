# IO filesystem exceptions

There are many applications, libraries or framework that throw IO related exceptions such as the very common FileNotFoundException or ConnectionLostException. It was imperative to create such a namespace to stop reproducing these exceptions. This namespace contains tons of exceptions related to FileSystem or Network operations!

This document details filesystem IO exceptions such as files not found or disk permission errors.

## Classes

Namespaces: `\Exceptions\IO` and `\Exceptions\IO\Filesystem`

Base classes: `\Exceptions\IO\IOException` and `\Exceptions\IO\Filesystem\FilesystemException`

Base interfaces: `\Exceptions\IO\IOExceptionInterface` and `\Exceptions\IO\Filesystem\FilesystemExceptionInterface`

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

Use this exception when your code tries to create a local directory, but it already exists.

Tags: `\Exceptions\Tag\ExistsTag`

---

### DirectoryNotFoundException

Use this exception when your code tries to open a local directory but cannot find it.

Tags: `\Exceptions\Tag\NotFoundTag`

---

### DirectoryNotReadableException

Use this exception when your code tries to read the content of a directory but cannot do so due to filesystem permissions.

Tags: `\Exceptions\Tag\ForbiddenTag`

---

### DirectoryNotWritableException

Use this exception when your code tries to write content to a directory but cannot do so due to filesystem permissions.

Tags: `\Exceptions\Tag\ForbiddenTag`

---

### FileAlreadyExistsException

Use this exception when your code tries to create a file, but it already exists.

Tags: `\Exceptions\Tag\ExistsTag`

---

### FileNotFoundException

Use this exception when your code tries to open a file but cannot find it.

Tags: `\Exceptions\Tag\NotFoundTag`

---

### FileNotReadableException

Use this exception when your code tries to read the content of a file but cannot do so due to filesystem permissions.

Tags: `\Exceptions\Tag\ForbiddenTag`

---

### FileNotWritableException

Use this exception when your code tries to write some content to a file but cannot do so due to filesystem permissions.

Tags: `\Exceptions\Tag\ForbiddenTag`

---

### NoMoreSpaceException

Use this exception when your code realizes that there is no more space available on the device to write to.

---

### NotADirectoryException

Use this exception when your code tries to do something on a directory but the passed on item is not a directory.

Tags: `\Exceptions\Tag\InvalidDataTag`

---

### NotAFileException

Use this exception when your code tries to do something on a file but the passed on item is not a file.

Tags: `\Exceptions\Tag\InvalidDataTag`
