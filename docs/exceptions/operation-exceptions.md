# Operation exceptions

How many times have you thrown a \RuntimeException or a simple \Exception when something didn't work out correctly? Calling a function incorrectly, or when a behavior doesn't end up too well should return something more precise than \RuntimeException. Operation exceptions are there for that. Anything that goes wrong? Throw an Operation exception that matches what went wrong.

## Classes

Namespace: `\Exceptions\Operation`

Base class: `\Exceptions\Operation\OperationException`

Base interface: `\Exceptions\Operation\OperationExceptionInterface`

Exceptions:

* AuthorizationException
* ForbiddenException
* InvalidOperationException
* NotImplementedException
* UnexpectedException

### AuthorizationException

The user trying to execute an operation is not authorized to perform the operation expected. This results in an incomplete operation but not necessarily in a full request authorization denial. This exception is the big brother of the HTTP unauthorized exception.

Tags: `\Exceptions\Tag\UnauthorizedTag` 

---

### ForbiddenException

The user trying to execute an operation is not allowed to perform the operation expected. This results in an incomplete operation but not necessarily in a full request denial. This exception is the big brother of the HTTP forbidden exception.

Tags: `\Exceptions\Tag\ForbiddenTag` 

---

### InvalidOperationException

Use this exception in the event something went wrong with the state of the application, and you cannot allow executing this operation because of that state. For example, processing a report with no report specified would yield an exception of type InvalidOperationException or something similar/custom based on it. This whole set of exceptions didn't exist before but should have as many operations can end up being impossible to execute.

Tags: `\Exceptions\Tag\InvalidDataTag`

---

### NotImplementedException

Use this exception when someone is calling a function/method that is not implemented yet. This is a good practice when implementing a lot of new functionality. Coupled to unit tests, you should not miss a NotImplementedException but at least the message is more verbose.

---

### UnexpectedException

Use this exception in the event that an operation that expected a certain result from a sub function/method call but did not get what I expected. This exception is the reversed validation exception. Instead of validating the user's input to a function, it is a means to signal that something went wrong when calling a subcomponents and the result is unexpected.
