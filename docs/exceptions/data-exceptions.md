# Data exceptions

Data exceptions pertain to all the validation aspect of data and the operations associated to it. They are not stored as `Validation\` exceptions because they do not pertain to validation frameworks but to the integrity and validity of the data itself not to it's validation.

## Classes

Namespace: `\Exceptions\Data`

Base class: `\Exceptions\Data\DataException`

Base interface: `\Exceptions\Data\DataExceptionInterface`

Exceptions:

* FormatException
* FoundTooLittleException
* FoundTooManyException
* IntegrityException
* NotFoundException
* TypeException
* ValidationException

### FormatException

Use this exception when the format of data passed to your code does not fit expected format. For example:

- You are expecting a data format such as JSON and received data in the form of XML
- You are expecting a data in a format that cannot be parsed such as a bad regular expression

Tags: `\Exception\Tag\InvalidDataTag`

### FoundTooLittleException

Use this exception when the data requested by your code was found but it found actually less than expected. A good use for this is when you are looking for a specific set of items such as 10 items but you end up finding only 9. In this case, you throw this exception.

> **IMPORTANT NOTE**: If the code in context is a service provider that queries a database, this would be the right exception to throw and listen for. The controller on the other hand would catch this and throw a NotFoundException from the Http namespace which would be converted to a standardized message in the front controller.

Tags: None

### FoundTooManyException

Use this exception when the data requested by your code was found and it found actually more than expected. A good use for this is the findSingle usual function we find in many library and orm. If you have more than 1 record found, it might mean that you should send back this exception.

> **IMPORTANT NOTE**: If the code in context is a service provider that queries a database, this would be the right exception to throw and listen for. The controller on the other hand would catch this and throw a NotFoundException from the Http namespace which would be converted to a standardized message in the front controller.

Tags: None

### IntegrityException

Use this exception when the data passed to your code would create an integrity issue. For example, the storage engine you are using complains that a foreign key or constraint is being violated.

> **CLARIFICATION**: This does not only apply to databases. It could apply to your own internal business logic between different systems and express that the operation would cause an integrity problem.
 
Tags: `\Exceptions\Tag\InvalidDataTag`

### NotFoundException

Use this exception when the data requested by your code cannot be found. In most scenarios, this is the equivalent of an item that cannot be found in a filesystem or in a database. The big difference is that this item is not linked to a specific context such as the filesystem nor is it linked to the HTTP context.

> **IMPORTANT NOTE**: If the code in context is a service provider that queries a database, this would be the right exception to throw and listen for. The controller on the other hand would catch this and throw a NotFoundException from the Http namespace which would be converted to a standardized message in the front controller.
 
Tags: `\Exceptions\Tag\NotFoundTag`

### TypeException

The data provided to your code is not of the right type. This is part of the validation group of exceptions but pertains to type validation. You received an int and were expecting an object but did not want to use type hinting for flexibility? Throw this exception!

Tags: `\Exceptions\Tag\InvalidDataTag`

### ValidationException

The data provided to your code is not following expected validations. These validations should be considered as any of the business model validations or domain validation. Something does not pass the basic validation steps, then you should throw this.

> **IMPORTANT NOTE**: Although debatable, you should note that an integrity exception should be the one being thrown when the validation goes further down the chain into the business systems. `ValidationException` should be sent back if the basic format of data, data types or basic scalar constraints are not met.

Tags: `\Exceptions\Tag\InvalidDataTag`