# IO network exceptions

There are many applications, libraries or framework that throw IO related exceptions such as the very common FileNotFoundException or ConnectionLostException. It was imperative to create such a namespace to stop reproducing these exceptions. This namespace contains tons of exceptions related to FileSystem or Network operations!

This document details network IO exceptions such as connection lost or connection timeout.

## Classes

Namespaces: `\Exceptions\IO` and `\Exceptions\IO\Network`

Base classs: `\Exceptions\IO\IOException` and `\Exceptions\IO\Network\NetworkException`

Base interfaces: `\Exceptions\IO\IOExceptionInterface` and `\Exceptions\IO\Network\NetworkExceptionInterface`

Exceptions:

* ConnectionLostException
* ConnectionRefusedException
* ConnectionTimeoutException
* RequestTimeoutException
* UnexpectedResponseException
* UnknownHostException

### ConnectionLostException

Use this exception when an IO operation that requires a distant connection gets cut off after negotiating connection.

Tags: `\Exceptions\Tag\AbortedTag`

---

### ConnectionRefusedException

Use this exception when an IO operation that requires a distant connection is refused as you are negotiating the connection with the external resource.

Tags: `\Exceptions\Tag\ForbiddenTag`

---

### ConnectionTimeoutException

Use this exception when an IO network connection fails to connect in time. This exception is slightly different from the RequestTimeoutException where it is the request that failed.

Tags: `\Exceptions\Tag\AbortedTag`

---

### RequestTimeoutException

Use this exception when an IO network request fails to respond in time. This exception is slightly different from the ConnectionTimeoutException where it is the connection to the host that failed.

Tags: `\Exceptions\Tag\AbortedTag`

---

### UnexpectedResponseException

Use this exception when an IO operation based on a communication protocol receives an unexpected response from the remote host.

For example, establishing an FTP connection on a SFTP server will yield unexpected communication dialog. In this event, an UnexpectedResponseException should be thrown.

Tags: `\Exceptions\Tag\AbortedTag`

---

### UnknownHostException

Use this exception when an IO operation tries to reach a remote host that cannot be resolved due to DNS or IP issues.

Tags: `\Exceptions\Tag\NotFoundTag`