[![Latest Stable Version](https://poser.pugx.org/crazycodr/standard-exceptions/version.png)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Monthly Downloads](https://poser.pugx.org/crazycodr/standard-exceptions/d/monthly)](https://packagist.org/packages/crazycodr/standard-exceptions) [![Build Status](https://travis-ci.org/crazycodr/standard-exceptions.png?branch=master)](https://travis-ci.org/crazycodr/standard-exceptions)

# Standard Exceptions Package

This project is aimed at providing additional standard exceptions to [PHP](http://www.php.net/). 

Many exceptions that are missing from the SPL are constantly being reproduced in different projects. By providing a package of high-quality, well organised exceptions, it will, in the long run, increase interoperability between projects and libraries.

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

For more information, visit the [Getting Started Page](docs/getting-started.md) or for even more information, you get read the whole [Documentation](docs/index.md).

If you need help upgrading for the old version 1 to this version, see the [Upgrading from Version 1 to Version 2](docs/upgrade-1-2.md) documentation page.

# Features

* Highly comprehensive list of exceptions and namespaces:
  * [collection-exceptions.md](docs/exceptions/collection-exceptions.md)
  * [data-exceptions.md](docs/exceptions/data-exceptions.md)
  * [http-client-exceptions.md](docs/exceptions/http-client-exceptions.md)
  * [http-server-exceptions.md](docs/exceptions/http-server-exceptions.md)
  * [io-filesystem-exceptions.md](docs/exceptions/io-filesystem-exceptions.md)
  * [io-network-exceptions.md](docs/exceptions/io-network-exceptions.md)
  * [operation-exceptions.md](docs/exceptions/operation-exceptions.md)
* [Tag interfaces](docs/tags.md) to catch common exceptions with similar means but different contexts
* Exceptions define default messages and error codes using the [DefaultsInterface and DefaultConstructorTrait](docs/helpers.md)
* Throwing new exceptions from another exception allows easier exception chaining using [FromException helper](docs/helpers.md)

# Contribution

Don't hesitate to contribute to this package by:

* Proposing new exceptions or namespaces
* Fix documentation issues or bugs by opening PRs
* Using it and spreading it's use throughout projects and libraries


If you want to contribute to the code base go to the [Contributing page](docs/contribute.md).
