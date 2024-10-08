# Exception tags

## Problem to solve

Often, an exception may convey he same means as another exception but just not the same context. For example:

- Collection\KeyNotFoundException (In memory)
- Data\NotFoundException (In a database or storage engine)
- Http\Client\NotFoundException (On a web service)
- IO\Filesystem\DirectoryNotFoundException (In the filesystem)
- IO\Filesystem\FileNotFoundException (In the filesystem)
- IO\Network\UnknownHostException (On the web)

These all mean the same thing! You tried to do something on a resource but the underlying code **failed to find the resource** to act upon. What happens if you want to abstract an operation behind multiple providers that can act differently? Will you catch each exception and treat them separately? You should not, or you'll end up duplicating your code. Tags to the rescue!

## Solution

The `Tag\` namespace contains different interfaces that help you convey the same means to your exceptions. So even if you throw a `FileNotFoundException`, your users can react on `Tag\NotFoundTag` and still catch anything that can be thrown at them regarding something was not found while processing the request. Now **that is interoperability**.

## Tags

All tags are found under `\Exceptions\Tag`.

### Exists tag

The `ExistsTag` interface is assigned to any exception that declares that the operation you tried to execute failed because the entity you tried to add to some kind of collection or a lot of items already existed.

> **IMPORTANT NOTES**: This was previously named `AlreadyExistsException` and was recently renamed. You can still use `AlreadyExistsException` to catch exceptions that extend the `ExistsTag` but you cannot use the `ExistsTag` to catch old exceptions you created in your project that implement `OperationAbortedExceptio`n.
>
> `AlreadyExistsException` is deprecated as of the latest version and will be removed in version 3.0

### Forbidden tag

The `ForbiddenTag` interface is assigned to any exception that declares that the operation you tried to execute was not allowed for different reasons. This usually conveys that the operation could be executed if done differently because the authentication did pass but the authorization failed.

You should consider mapping this tag to anything that is permission related or integrity failures. (Do not confuse integrity checks and type validation)

### Invalid data tag

The `InvalidDataTag` interface is assigned to any exception that declares that the operation you tried to execute was not allowed because the data you supplied it was invalid. (validation failed, business rules failed or configuration of the operation fails to resolve)

You should consider mapping this tag to anything that is configuration wise or data type validation wise operations that would fail.

### Not found tag

The `NotFoundTag` interface is assigned to any exception that declares that the operation you tried to execute was not allowed because the entity you wanted to apply this operation on was not found.

You should consider mapping this tag to anything that is about searching for data and not finding it. It could be database wise, api wise, filesystem wise. Just think: "I could not find that resource".

### Unauthorized tag

The `UnauthorizedTag` interface is assigned to any exception that declares that the operation you tried to execute was not allowed because we could not identify you. Thus, you should attempt this operation again only if you provide proper credentials or means of identity.

Don't confuse `UnauthorizedTag` and `ForbiddenTag`, one is about permission being denied, the other is about missing authentication which could resolve into a `ForbiddenTag` if you didn't want to take care of authentication issues.
