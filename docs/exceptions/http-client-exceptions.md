# Http client exceptions

Many frameworks and applications redefine Http exceptions that map to Http status codes. These should not be redefined or they become different across two projects and portability of your code suffers. This namespace contains most if not all Http exceptions you'll ever need.

This document details client http exception or the class of http responses that map to the 400s response code.

> **GENERAL IMPORTANT NOTE REGARDING HTTP EXCEPTIONS**: Never throw an exception at the user. Always catch it and synthesize it to a correct html response with
appropriate headers. You can use the constants and accessor to get HTML values to return.

## Classes

Namespaces: `\Exceptions\Http` and `\Exceptions\Http\Client`

Base classs: `\Exceptions\Http\HttpException` and `\Exceptions\Http\Client\ClientErrorException`

Base interfaces: `\Exceptions\Http\HttpExceptionInterface` and `\Exceptions\Http\Client\ClientErrorExceptionInterface`

Exceptions:

> **IMPORTANT NOTE**: Because these map directly to HTTP status codes, they are sorted by the HTTP status code instead of alphabetically but the class name is only a name and does not incorporate the status code in it.

* 400: BadRequestException
* 401: UnauthorizedException
* 402: PaymentRequiredException
* 403: ForbiddenException
* 404: NotFoundException
* 405: MethodNotAllowedException
* 406: NotAcceptableException
* 407: ProxyAuthorizationRequiredException
* 408: RequestTimeoutException
* 409: ConflictException
* 410: GoneException
* 411: LengthRequiredException
* 412: PreConditionFailedException
* 413: PayloadTooLargeException (Replaces `RequestEntityTooLargeException`)
* 414: URITooLongException
* 415: UnsupportedMediaTypeException
* 416: RangeNotSatisfiableException (Replaces `RequestedRangeNotSatisfiableException`)
* 417: ExpectationFailedException
* 418: ImATeapotException
* 421: MisdirectedRequestException
* 422: UnprocessableEntityException
* 423: LockedException
* 424: FailedDependencyException
* 426: UpgradeRequiredException
* 428: PreConditionRequiredException
* 429: TooManyRequestsException
* 431: RequestHeaderFieldsTooLargeException
* 451: UnavailableForLegalReasonsException

### 400: BadRequestException

You should use this exception when the request just couldn't be understood at all. This can be used for various reasons such as the request not following the expected structure like form encoding or raw JSON in the body or maybe the information in the body was supposed to be encrypted and it was not.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 401: UnauthorizedException

You should use this exception when the request is not providing identification mechanisms that are required to complete the request. The user should try to resubmit this request with added/changed credentials so that the authentication succeeds.

> **DEBATABLE**: if a user does not have permission to do something, you should be sending back a ForbiddenException instead of a UnauthorizedException. The user at this point is identified so not having the rights to do something should not require the user to change credentials because it would then be a different user.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\UnauthorizedTag`

---

### 402: PaymentRequiredException

You should use this exception when the user would have access to a certain resource if he had payed for the feature or content.

> **IMPORTANT NOTE**: This is a reserved status code in HTTP 1.1 standard but it was never finalized or integrated. Use this at your own risk. We suggest you use the ForbiddenException instead, it has a wider meaning but at least it is an official status code.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\ForbiddenTag`

---

### 403: ForbiddenException

You should use this exception only when the operation attempted by the request would be denied due to permissions associated with the identity of the requester. If the requester cannot act on a resource that is owned by someone else then you fall into a grey zone. See below!

> **DEBATABLE**: If a user does not have permission to do something, you should be sending back a ForbiddenException but if the user does not have access to the resource because it is not owned by the current user or shared with the current user then you should probably send back a NotFoundException instead for security reasons.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\ForbiddenTag`

---

#### 404: NotFoundException

You should use this exception when a request cannot reach or find the requested resource/entity being asked for.

> **DEBATABLE**: If a user does not have permission to do something, you should be sending back a ForbiddenException but if the user does not have access to the resource because it is not owned by the current user or shared with the current user then you should probably send back a NotFoundException instead for security reasons.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\NotFoundTag`

---

### 405: MethodNotAllowedException

You should use this exception when a request features a method (GET, PUT, POST, CUSTOM) that is not applicable to the resource being manipulated/requested.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 406: NotAcceptableException

You should use this exception when a request features an acceptance criteria that the server cannot respond to. For example,  your user asks for an ACCEPT-LANGUAGE that you do not support. This response type applies to any type of accept requirement passed on by the user to the server. Any accept header value that your server cannot support, you should throw this exception back. 

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 407: ProxyAuthorizationRequiredException

> You should use this exception only when the request being passed on to your server requires a sub-process to go through another distant server.

When an additional request needs to pass through a proxy server but the credentials in the request are not present or invalid and the proxy throws this error code back at you. At this point, you should probably throw this back at your user or attempt a different distant request.

If the user sends the same request again, the same error should occur. Unless the proxy is updated, the credentials are added or changed, this request should not succeed.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\UnauthorizedTag`

---

### 408: RequestTimeoutException

> You should use this exception only when the request being passed on to your server requires a sub-process to go through another distant server.

When an additional request needs to go to a distant server but the response never comes back and you get a timeout, this is the exception you should throw back at your user.

If the user sends the same request again, the error may or may not occur again depending on the reason why the request timed out in the first place.

> **DEBATABLE**: If the request you are responding to does not require a distant call to another server but has a long standing sub process on the same machine that fails to respond in time, you should probably use the OperationTimedOutException instead of the RequestTimeoutException.

Tags: `\Exceptions\Tag\AbortedTag`

---

### 409: ConflictException

You should use this exception when the request features an operation that would cause a conflict to happen on the underlying storage systems. This could be related to database integrity but as well to filesystem integrity.

A common use case for this exception would be for insertions or updates on a database that would trigger a unique constraint to fail validation.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag` 

---

### 410: GoneException

You should use this exception when the state of a resource makes the resource unavailable due to state transition such as when a soft delete operation is executed on it. The resource is still there but it is gone because it has been deleted.

> **DEBATABLE**: A lot of products out there will return a Not found (404) when a resource is not available. It is a more common practice. You may want to validate the impacts of using a 410 Gone as a response to content that was soft deleted.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\NotFoundTag`

---

### 411: LengthRequiredException

> You should use this exception only when the request being passed on to your server requires a sub-process to go through another distant server.

You should use this exception when the request made towards are resource does not feature a content length and the server requires it to properly process the request. 

This is usually only used in a stream supported request context as a PHP server should never get a partial request. You may however need to handle/throw this exception if you do a distant request that does not satisfy this condition.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 412: PreConditionFailedException

You should use this exception when the request made towards a resource is supporting one or more pre-condition HTTP headers and one of those headers cannot be met due to an invalid value or due to an invalid header name.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 413: PayloadTooLargeException

> You should use this exception only when the request being passed on to your server requires a sub-process to go through another distant server.

You should use this exception only when you receive the same response from a distant server that refuses to process your request because the payload/content body that you send exceeds the server's limitations.

This is usually not used in a PHP context because your server such as Nginx or Apache will refuse the request before you. It is possible for you to read the request body and decide that the request is too big but it is an improbable scenario.

Replaces `RequestEntityTooLargeException`

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 414: URITooLongException

> You should use this exception only when the request being passed on to your server requires a sub-process to go through another distant server.

You should use this exception only when you receive the same response from a distant server that refuses to process your request because the request URI you requested contained too much information and it exceeded the server's limitations.

This is usually not used in a PHP context because your server such as Nginx or Apache will refuse the request before you. It is possible for you to read the request URI and decide that the request URI is too big but it is an improbable scenario.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 415: UnsupportedMediaTypeException

You should use this exception when a request features an expected response type that the server cannot respond to. For example,  your user asks for an ACCEPT content-type that you do not support such as `application/pdf` and the resource cannnot be converted to such a media type. On the opposite of `NotAcceptableException`, this exception applies only to the ACCEPT header that specifies the media type the user is expecting. 

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 416: RangeNotSatisfiableException

When a request is made and it contains a range specification, you should validate that the range can indeed be fulfilled properly. If the range cannot be fulfilled properly, you should return this response.

> **DEBATABLE**: You could send back this response only if the range is completely off or invalid but still respond to incomplete range requests that fall out of the bound of the result requested for. For example, user asks for records 100-110 but your system only has 107 records, should you return a `RangeNotSatisfiableException` or still serve the request with only 7 results?

Replaces: `RequestedRangeNotSatisfiableException`

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 417: ExpectationFailedException

> Similar to `PreConditionFailedException` but is related to Expect header.

You should use this exception when the request made towards a resource is supporting the expect HTTP header and the operation cannot be fulfilled properly because the result of the operation does not math the expected result.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 418: ImATeapotException

1998 April's fools joke introduced this status code. We had to integrate it into the library although it is completely useless. Can you find the easter egg regarding this class?

Tags: `\Exceptions\Tag\AbortedTag`

---

### 421: MisdirectedRequestException

You should use this exception in the event a request cannot be handled by the current server because, for example, it does not have access to the resources or features necessary to respond to the request.

Tags: `\Exceptions\Tag\AbortedTag`

---

### 422: UnprocessableEntityException

You should use this exception in the event the data in the request does not pass or conform to basic validation scenarios. This is the first response that you should get if the content of the request does not meet the basic criteria.

> **DEBATABLE**: How do you consider a conflict in the database versus an unprocessable entity? If an entity is gone, do you send a 403, a 404, a 409, a 410 or a 422? These are all very subjective choices! We suggest you send a 422 on basic validation rules not passing and a 409 Conflict only if the operation you are running fails to complete due to an integrity issue. It does not mean you cannot validate integrity/uniqueness during the basic validation stage but if you do so, you should always return 422 at that point. 

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 423: LockedException

You should use this exception in the event the data being requested is done on an entity that has a soft lock on it. The operation cannot be completed because the soft lock first needs to be removed.

> **IMPORTANT NOTE**: Soft locking or optimistic/pessimistic locked is not a common practice on the web but not impossible. There is a lot of documentation on how to implement locking but no clear way to do it. Use this at your own risk.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\ForbiddenTag`

---

### 424: FailedDependencyException

You should use this when an external sub-process required by the request ends up in error and you can't reveal or well define the error back tot he user. This is analogous to the `OperationAbortedException` exception in a sense that an underlying operation failed to complete.

Tags: `\Exceptions\Tag\AbortedTag`

---

### 426: UpgradeRequiredException

You should use this when the request is not up to date with the communication protocol to use. This should be normally returned by the underlying web server in SSL/TLS incompatibility scenarios but nothing prevents you from using this exception to signal a user that the request he did requires an updated communication protocol or format.

> **DEBATABLE**: This is very analogous to the 422 Unprocessable entity and 415 Unsupported Media Type because if you don't have a version specifier with your request, this means the the entity is in fact unprocessable. You'd need a means to identify the version of the request and send back this exception instead of a 422. If the version is specified but the endpoint doesn't support it anymore, it would probably make more sense to return a 415 Unsupported Media Type.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 428: PreConditionRequiredException

Analogous to the PreConditionFailedException, this exception should be used when the request is missing a required pre-condition.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 429: TooManyRequestsException

You should use this when the request when you have implemented some sort of throttling in your application. There is no clear definition of when there are too many requests being sent as this is very application specific.

> **IMPORTANT NOTE**: A popular type of request throttling approach for APIs is the leaky bucket algorithm. You can find many articles on this on the internet and depending on your framework, you even have pre-existing middle ware or plugins that already exists ready to integrate.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\ForbiddenTag`

---

### 431: RequestHeaderFieldsTooLargeException

> You should use this exception only when the request being passed on to your server requires a sub-process to go through another distant server.

You should use this exception only when you receive the same response from a distant server that refuses to process your request because the headers or one specific header amounts to too much information and exceeds the server's limitations.

This is usually not used in a PHP context because your server such as Nginx or Apache will refuse the request before you. It is possible for you to read the request headers and decide that the request is invalid but it is an improbable scenario.

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\InvalidDataTag`

---

### 451: UnavailableForLegalReasonsException

You should return this exception when there is a legal request deposited against a specific resource that is being requested. 

Tags: `\Exceptions\Tag\AbortedTag` and `\Exceptions\Tag\ForbiddenTag`