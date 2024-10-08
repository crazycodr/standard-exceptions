# Getting started

To install `Standard Exceptions`, just require it using [Composer](http://www.getcomposer.org/):

```
$ composer require crazycodr/standard-exceptions
```

And then just start throwing exceptions:

```php
throw new \Exceptions\Data\NotFoundException();
```

Or catch them:

```php
try {

} catch(\Exceptions\Data\NotFoundException $ex){
   
}
```

Or even better, catch exceptions with similar means:

```php
try {

} catch(\Exceptions\Tag\NotFoundTag $ex){
   
}
```

It is that easy!

# Digging deeper

## New exceptions and namespaces

There are many missing runtime exceptions in the default SPL package. There are many exceptions that we often see re-created over and over again across projects and packages, and it does not make sense to do that. 

The Standard Exceptions package is all about fixing this. It creates a completely new namespace structure that contains all the exceptions you should need (We sure hope so) and adds several if not many new exceptions, so you don't have to define yourself.

## New namespace structure

- Exceptions
    - Collection
    - Data
    - Generic
    - Http
        - Client
        - Server
    - IO
        - Filesystem
        - Network
    - Operation

## Description of each namespace

### Collection exceptions

There are many array/collection based operations out there, collections classes, array access objects, iterators, etc. Why aren't there any exceptions related to array/collection manipulations? Does everything pertain to \RuntimeException? This whole branch of exceptions will focus on providing clear and concise, finer grained exceptions for non-native collection/array manipulations.

[Learn more](exceptions/collection-exceptions.md)

### Data exceptions

Data exceptions pertain to all the validation aspect of data and the operations associated to it. They are not stored as `Validation\` exceptions because they do not pertain to validation frameworks but to the integrity and validity of the data itself not to its validation.

[Learn more](exceptions/data-exceptions.md)

### Http exceptions

Many frameworks and applications redefine Http exceptions that map to Http status codes. These should not be redefined, or they become different across two projects and portability of your code suffers. This namespace contains most if not all Http exceptions you'll ever need.

You will find two sub namespaces in this namespace namely:

- Http/Client - [Learn more](exceptions/http-client-exceptions.md)
- Http/Server - [Learn more](exceptions/http-server-exceptions.md)

These will map to the different 400s and 500s HTTP errors codes.

### IO exceptions

There are many applications, libraries or framework that throw IO related exceptions such as the very common FileNotFoundException or ConnectionLostException. It was imperative to create such a namespace to stop reproducing these exceptions. This namespace contains tons of exceptions related to FileSystem or Network operations!

You will find two sub namespaces in this namespace namely:

- IO/Filesystem - [Learn more](exceptions/io-filesystem-exceptions.md)
- IO/Network - [Learn more](exceptions/io-network-exceptions.md)

### Operation exceptions

How many times have you thrown a \RuntimeException or a simple \Exception when something didn't work out correctly? Calling a function incorrectly, or when a behavior doesn't end up too well should return something more precise than \RuntimeException. Operation exceptions are there for that. Anything that goes wrong? Throw an Operation exception that matches what went wrong.

[Learn more](exceptions/operation-exceptions.md)

# Exception tags

Often, an exception may convey he same means as another exception but just not the same context. For example:

- Collection\KeyNotFoundException (In memory)
- Data\NotFoundException (In a database or storage engine)
- Http\Client\NotFoundException (On a web service)
- IO\Filesystem\DirectoryNotFoundException (In the filesystem)
- IO\Filesystem\FileNotFoundException (In the filesystem)
- IO\Network\UnknownHostException (On the web)

These all mean the same thing! You tried to do something on a resource but the underlying code **failed to find the resource** to act upon. What happens if you want to abstract an operation behind multiple providers that can act differently? Will you catch each exception and treat them separately? You should not, or you'll end up duplicating your code. Tags to the rescue!

The `Tag\` namespace contains different interfaces that help you convey the same means to your exceptions. So even if you throw a `FileNotFoundException`, your users can react on `Tag\NotFoundTag` and still catch anything that can be thrown at them regarding something was not found while processing the request. Now **that is interoperability**.

[Learn more](tags.md)

# Defaults and From helpers

There is no easy way to extract a message from an exception's class nor its error code. When you want to use an exception and just pass on a previous exception into it, the 3rd parameter is the only way to do this. But what if you didn't know what was the original message?

Using the `from` and `defaults` helpers, this problem can be easily solved. All exceptions from this package implement those helpers.

[Learn more](helpers.md)
