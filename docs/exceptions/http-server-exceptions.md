# Http server exceptions

Many frameworks and applications redefine Http exceptions that map to Http status codes. These should not be redefined, or they become different across two projects and portability of your code suffers. This namespace contains most if not all Http exceptions you'll ever need.

This document details server http exception or the class of http responses that map to the 500s response code.

> **GENERAL IMPORTANT NOTE REGARDING HTTP EXCEPTIONS**: Never throw an exception at the user. Always catch it and synthesize it to a correct html response with
appropriate headers. You can use the constants and accessor to get HTML values to return.

## Classes

Namespaces: `\Exceptions\Http` and `\Exceptions\Http\Server`

Base classes: `\Exceptions\Http\HttpException` and `\Exceptions\Http\Server\ServerErrorException`

Base interfaces: `\Exceptions\Http\HttpExceptionInterface` and `\Exceptions\Http\Server\ServerErrorExceptionInterface`

Exceptions:

> **IMPORTANT NOTE**: Because these map directly to HTTP status codes, they are sorted by the HTTP status code instead of alphabetically but the class name is only the official status code name and does not incorporate the status code in it.

* 500: InternalServerErrorException
* 501: NotImplementedException
* 502: BadGatewayException
* 503: ServiceUnavailableException
* 504: GatewayTimeoutException
* 505: HttpVersionNotSupportedException
* 507: InsufficientStorageException
* 508: LoopDetectedException

### 500: InternalServerErrorException

You should use this exception when the request results in a generic error that is either not explained or unexpected.

> **IMPORTANT NOTE**: It is a good practice to catch any exception at a low level in a framework, log it and return a generic 500 exception to the user to protect your code, architecture and data. In a development scenario, you should avoid this to benefit as much as possible from stack traces and debugging features offered by your framework but a production scenario should always use this coupled to an error tracker.

---

### 501: NotImplementedException

This exception should be used only if a feature is incomplete and unusable.

> **IMPORTANT NOTE**: Ask yourself if you need to catch and throw this exception. You should never publish a feature that is not implemented although there are all sorts of scenarios and reasons. Use careful judgement!

---

### 502: BadGatewayException

This exception is used to signal the user that a downstream process returned an unexpected response, and you have no clue what to do with that. Provides a little more information than a raw 500 Internal Server Error exception.

---

### 503: ServiceUnavailableException

You should return this exception when your system is currently unavailable either due to another subsystem not being available or because one of more system/subsystem is undergoing maintenance.

> **IMPORTANT NOTE**: This is the normal error code any system will return while they are in maintenance mode and upgrading a database or code.

---

### 504: GatewayTimeoutException

This exception is used to signal the user that a downstream process timed out while waiting for an answer. This is usually the case when your application uses a distant API that is behind a gateway and the API fails to respond in time. For example, a CDN will usually return 504s when you try to access a resource on it and the resource is not available on it and the remote server fails to respond in it.

> **DEBATABLE**: When you issue a downstream request to another server, and it fails to respond in time, should you return a 504 or a 408? 408 means the client failed to respond in time, but you would never send that, it would be your gateway or your web server such as Nginx or Apache that would do this for you. Use good judgement when selecting the proper response. 

---

### 505: HttpVersionNotSupportedException

This exception is only implemented for distant request support because you would not be the one to return this status code, it would be your web server such as Nginx or Apache that would return this.

---

### 507: InsufficientStorageException

This exception should be returned if you have a very large request to generate and must pre-generate it before streaming it out to the user. If the response exceeds the available server space or if there is a quota that is exceeded, this would be the proper code to return. 

---

### 508: LoopDetectedException

This exception should be used if you detect that an internal/sub process is acting in a loop because of the request configuration.
