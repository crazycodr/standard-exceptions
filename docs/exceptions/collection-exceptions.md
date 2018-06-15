# Collection exceptions

There are many array/collection based operations out there, collections classes, array access objects, iterators, etc. Why aren't there any exceptions related to array/collection manipulations? Does everything pertain to \RuntimeException? This whole branch of exceptions will focus on providing clear and concise, finer grained exceptions for non-native collection/array manipulations.

## Classes

Namespace: `\Exceptions\Collection`

Base class: `\Exceptions\Collection\CollectionException`

Base interface: `\Exceptions\Collection\CollectionExceptionInterface`

Exceptions:

* EmptyException
* FullException
* KeyAlreadyExistsException
* KeyNotFoundException
* ReadOnlyArrayException
* ReadOnlyArrayItemException

### EmptyException

Use this exception when an operation on a collection cannot be completed because the collection is empty.

Tags: None 

### FullException

Use this exception when an operation on a collection cannot be achieved because the collection has already reached it's limit and cannot accept more data.

Tags: None

### KeyAlreadyExistsException

Use this exception when an operation on a collection tries to add an element using a key that already exists in the collection of items.

Tags: `\Exception\Tag\ExistsTag`

### KeyNotFoundException

Use this exception when an operation on a collection tries to retrieve an element using a key that does not exist in the collection of items.

Tags: `NotFoundTag`

> **IMPORTANT NOTE**: Be careful not to throw this exception when data from a data source cannot be found unless that data source is specifically a collection/array like structure that lives in memory. When querying a filesystem, use the filesystem exceptions, when querying a data source use the data exceptions, etc.

### ReadOnlyArrayException

Use this exception when an operation on a collection that is locked/read-only tries to modify the collection of items.

Tags: None

### ReadOnlyArrayItemException

Use this exception when an operation on a collection item that is locked/read-only tries to modify the item in question.

Tags: None