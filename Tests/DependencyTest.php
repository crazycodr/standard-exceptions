<?php

class DependencyTest extends \PHPUnit\Framework\TestCase
{
    
    /**
     * Returns the dependencies for a specific class that is widely reused. This is used to simplify a lot the
     * hardcoded dependency maintenance.
     *
     * @param string $className
     *
     * @return string[]
     */
    public function getDependenciesFor(string $className): array
    {
        switch ($className) {
            
            // Resolution of tags that extend old tags
            case Exceptions\Tag\AbortedTag::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\Exceptions\Tag\OperationAbortedException::class)
                );
            case Exceptions\Tag\InvalidDataTag::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\Exceptions\Tag\InvalidDataException::class)
                );
            case Exceptions\Tag\NotFoundTag::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\Exceptions\Tag\NotFoundException::class)
                );
            case Exceptions\Tag\ExistsTag::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\Exceptions\Tag\AlreadyExistsException::class)
                );
            
            // Resolution of high level exception class dependencies
            case Exceptions\Collection\CollectionException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\RuntimeException::class),
                    $this->getDependenciesFor(\Exceptions\Collection\CollectionExceptionInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultsInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\FromException::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\WithContext::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultConstructorTrait::class)
                );
            case Exceptions\Data\DataException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\RuntimeException::class),
                    $this->getDependenciesFor(\Exceptions\Data\DataExceptionInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultsInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\FromException::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\WithContext::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultConstructorTrait::class)
                );
            case Exceptions\Http\HttpException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\RuntimeException::class),
                    $this->getDependenciesFor(\Exceptions\Http\HttpExceptionInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultsInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\FromException::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\WithContext::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultConstructorTrait::class)
                );
            case Exceptions\Http\Client\ClientErrorException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\Exceptions\Http\HttpException::class),
                    $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorExceptionInterface::class),
                    $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
                );
            case Exceptions\Http\Server\ServerErrorException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\Exceptions\Http\HttpException::class),
                    $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorExceptionInterface::class),
                    $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
                );
            case Exceptions\IO\IOException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\RuntimeException::class),
                    $this->getDependenciesFor(\Exceptions\IO\IOExceptionInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultsInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\FromException::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\WithContext::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultConstructorTrait::class)
                );
            case Exceptions\IO\Filesystem\FilesystemException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\Exceptions\IO\IOException::class),
                    $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemExceptionInterface::class)
                );
            case Exceptions\IO\Network\NetworkException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\Exceptions\IO\IOException::class),
                    $this->getDependenciesFor(\Exceptions\IO\Network\NetworkExceptionInterface::class)
                );
            case Exceptions\Operation\OperationException::class:
                return array_merge(
                    [$className],
                    $this->getDependenciesFor(\RuntimeException::class),
                    $this->getDependenciesFor(\Exceptions\Operation\OperationExceptionInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultsInterface::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\FromException::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\WithContext::class),
                    $this->getDependenciesFor(\Exceptions\Helpers\DefaultConstructorTrait::class)
                );
            
            // If the class is not listed, then just return itself to be merged into the parent list
            default:
                return [$className];
        }
    }
    
    /**
     * @return mixed[]
     */
    public function providesDependencies()
    {
        
        // Will contain all scenarios to test with the class name to test and an array of all classes this class
        // should depend on
        $dependencies = [];
        
        // New tag dependencies to ensure backwards compatibility with new tags acting as renames over deprecated ones
        $dependencies[\Exceptions\Tag\NotFoundTag::class] = [
            \Exceptions\Tag\NotFoundTag::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Tag\NotFoundException::class)
            ),
        ];
        $dependencies[\Exceptions\Tag\AbortedTag::class] = [
            \Exceptions\Tag\AbortedTag::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Tag\OperationAbortedException::class)
            ),
        ];
        $dependencies[\Exceptions\Tag\InvalidDataTag::class] = [
            \Exceptions\Tag\InvalidDataTag::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataException::class)
            ),
        ];
        
        // Collection exception dependencies
        $dependencies[\Exceptions\Collection\EmptyException::class] = [
            \Exceptions\Collection\EmptyException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Collection\CollectionException::class)
            ),
        ];
        $dependencies[\Exceptions\Collection\FullException::class] = [
            \Exceptions\Collection\FullException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Collection\CollectionException::class)
            ),
        ];
        $dependencies[\Exceptions\Collection\KeyAlreadyExistsException::class] = [
            \Exceptions\Collection\KeyAlreadyExistsException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Collection\CollectionException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ExistsTag::class)
            ),
        ];
        $dependencies[\Exceptions\Collection\KeyNotFoundException::class] = [
            \Exceptions\Collection\KeyNotFoundException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Collection\CollectionException::class),
                $this->getDependenciesFor(\Exceptions\Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[\Exceptions\Collection\ReadOnlyArrayException::class] = [
            \Exceptions\Collection\ReadOnlyArrayException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Collection\CollectionException::class)
            ),
        ];
        $dependencies[\Exceptions\Collection\ReadOnlyArrayItemException::class] = [
            \Exceptions\Collection\ReadOnlyArrayItemException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Collection\CollectionException::class)
            ),
        ];
        
        // Data exception dependencies
        $dependencies[\Exceptions\Data\FormatException::class] = [
            \Exceptions\Data\FormatException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Data\DataException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Data\FoundTooLittleException::class] = [
            \Exceptions\Data\FoundTooLittleException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Data\DataException::class)
            ),
        ];
        $dependencies[\Exceptions\Data\FoundTooManyException::class] = [
            \Exceptions\Data\FoundTooManyException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Data\DataException::class)
            ),
        ];
        $dependencies[\Exceptions\Data\IntegrityException::class] = [
            \Exceptions\Data\IntegrityException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Data\DataException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Data\NotFoundException::class] = [
            \Exceptions\Data\NotFoundException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Data\DataException::class),
                $this->getDependenciesFor(\Exceptions\Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[\Exceptions\Data\TypeException::class] = [
            \Exceptions\Data\TypeException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Data\DataException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        
        // Http client exception dependencies
        $dependencies[\Exceptions\Http\Client\BadRequestException::class] = [
            \Exceptions\Http\Client\BadRequestException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\ConflictException::class] = [
            \Exceptions\Http\Client\ConflictException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\ExpectationFailedException::class] = [
            \Exceptions\Http\Client\ExpectationFailedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\FailedDependencyException::class] = [
            \Exceptions\Http\Client\FailedDependencyException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\ForbiddenException::class] = [
            \Exceptions\Http\Client\ForbiddenException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\GoneException::class] = [
            \Exceptions\Http\Client\GoneException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\ImATeapotException::class] = [
            \Exceptions\Http\Client\ImATeapotException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\LengthRequiredException::class] = [
            \Exceptions\Http\Client\LengthRequiredException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\LockedException::class] = [
            \Exceptions\Http\Client\LockedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\MethodNotAllowedException::class] = [
            \Exceptions\Http\Client\MethodNotAllowedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\MisdirectedRequestException::class] = [
            \Exceptions\Http\Client\MisdirectedRequestException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\NotAcceptableException::class] = [
            \Exceptions\Http\Client\NotAcceptableException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\NotFoundException::class] = [
            \Exceptions\Http\Client\NotFoundException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\PaymentRequiredException::class] = [
            \Exceptions\Http\Client\PaymentRequiredException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\PreConditionFailedException::class] = [
            \Exceptions\Http\Client\PreConditionFailedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\PreConditionRequiredException::class] = [
            \Exceptions\Http\Client\PreConditionRequiredException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\ProxyAuthorizationRequiredException::class] = [
            \Exceptions\Http\Client\ProxyAuthorizationRequiredException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\UnauthorizedTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\RequestedRangeNotSatisfiableException::class] = [
            \Exceptions\Http\Client\RequestedRangeNotSatisfiableException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\RangeNotSatisfiableException::class] = [
            \Exceptions\Http\Client\RangeNotSatisfiableException::class,
            array_merge(
                [\Exceptions\Http\Client\RequestedRangeNotSatisfiableException::class],
                $dependencies[\Exceptions\Http\Client\RequestedRangeNotSatisfiableException::class][1]
            ),
        ];
        $dependencies[\Exceptions\Http\Client\RequestEntityTooLargeException::class] = [
            \Exceptions\Http\Client\RequestEntityTooLargeException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\PayloadTooLargeException::class] = [
            \Exceptions\Http\Client\PayloadTooLargeException::class,
            array_merge(
                [\Exceptions\Http\Client\RequestEntityTooLargeException::class],
                $dependencies[\Exceptions\Http\Client\RequestEntityTooLargeException::class][1]
            ),
        ];
        $dependencies[\Exceptions\Http\Client\RequestHeaderFieldsTooLargeException::class] = [
            \Exceptions\Http\Client\RequestHeaderFieldsTooLargeException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\RequestTimeoutException::class] = [
            \Exceptions\Http\Client\RequestTimeoutException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\TooManyRequestsException::class] = [
            \Exceptions\Http\Client\TooManyRequestsException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\UnauthorizedException::class] = [
            \Exceptions\Http\Client\UnauthorizedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\UnauthorizedTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\UnavailableForLegalReasonsException::class] = [
            \Exceptions\Http\Client\UnavailableForLegalReasonsException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\UnprocessableEntityException::class] = [
            \Exceptions\Http\Client\UnprocessableEntityException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\UnsupportedMediaTypeException::class] = [
            \Exceptions\Http\Client\UnsupportedMediaTypeException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\UpgradeRequiredException::class] = [
            \Exceptions\Http\Client\UpgradeRequiredException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Client\URITooLongException::class] = [
            \Exceptions\Http\Client\URITooLongException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Client\ClientErrorException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        
        // Http server exception dependencies
        $dependencies[\Exceptions\Http\Server\BadGatewayException::class] = [
            \Exceptions\Http\Server\BadGatewayException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Server\GatewayTimeoutException::class] = [
            \Exceptions\Http\Server\GatewayTimeoutException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Server\HttpVersionNotSupportedException::class] = [
            \Exceptions\Http\Server\HttpVersionNotSupportedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Server\InsuficientStorageException::class] = [
            \Exceptions\Http\Server\InsuficientStorageException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Server\InternalServerErrorException::class] = [
            \Exceptions\Http\Server\InternalServerErrorException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Server\LoopDetectedException::class] = [
            \Exceptions\Http\Server\LoopDetectedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Server\NotImplementedException::class] = [
            \Exceptions\Http\Server\NotImplementedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[\Exceptions\Http\Server\ServiceUnavailableException::class] = [
            \Exceptions\Http\Server\ServiceUnavailableException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Http\Server\ServerErrorException::class)
            ),
        ];
        
        // Filesystem exception dependencies
        $dependencies[\Exceptions\IO\Filesystem\DirectoryAlreadyExistsException::class] = [
            \Exceptions\IO\Filesystem\DirectoryAlreadyExistsException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ExistsTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\DirectoryNotFoundException::class] = [
            \Exceptions\IO\Filesystem\DirectoryNotFoundException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\DirectoryNotReadableException::class] = [
            \Exceptions\IO\Filesystem\DirectoryNotReadableException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\DirectoryNotWritableException::class] = [
            \Exceptions\IO\Filesystem\DirectoryNotWritableException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\FileAlreadyExistsException::class] = [
            \Exceptions\IO\Filesystem\FileAlreadyExistsException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ExistsTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\FileNotFoundException::class] = [
            \Exceptions\IO\Filesystem\FileNotFoundException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\FileNotReadableException::class] = [
            \Exceptions\IO\Filesystem\FileNotReadableException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\FileNotWritableException::class] = [
            \Exceptions\IO\Filesystem\FileNotWritableException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\NoMoreSpaceException::class] = [
            \Exceptions\IO\Filesystem\NoMoreSpaceException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\NotADirectoryException::class] = [
            \Exceptions\IO\Filesystem\NotADirectoryException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Filesystem\NotAFileException::class] = [
            \Exceptions\IO\Filesystem\NotAFileException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Filesystem\FilesystemException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        
        // Network exception dependencies
        $dependencies[\Exceptions\IO\Network\ConnectionLostException::class] = [
            \Exceptions\IO\Network\ConnectionLostException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Network\NetworkException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Network\ConnectionRefusedException::class] = [
            \Exceptions\IO\Network\ConnectionRefusedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Network\NetworkException::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Network\ConnectionTimeoutException::class] = [
            \Exceptions\IO\Network\ConnectionTimeoutException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Network\NetworkException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Network\RequestTimeoutException::class] = [
            \Exceptions\IO\Network\RequestTimeoutException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Network\NetworkException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Network\UnexpectedResponseException::class] = [
            \Exceptions\IO\Network\UnexpectedResponseException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Network\NetworkException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
            ),
        ];
        $dependencies[\Exceptions\IO\Network\UnknownHostException::class] = [
            \Exceptions\IO\Network\UnknownHostException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\IO\Network\NetworkException::class),
                $this->getDependenciesFor(\Exceptions\Tag\NotFoundTag::class)
            ),
        ];
        
        // Operation exception dependencies
        $dependencies[\Exceptions\Operation\AuthorizationException::class] = [
            \Exceptions\Operation\AuthorizationException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Operation\OperationException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class),
                $this->getDependenciesFor(\Exceptions\Tag\UnauthorizedTag::class)
            ),
        ];
        $dependencies[\Exceptions\Operation\ForbiddenException::class] = [
            \Exceptions\Operation\ForbiddenException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Operation\OperationException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class),
                $this->getDependenciesFor(\Exceptions\Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[\Exceptions\Operation\InvalidOperationException::class] = [
            \Exceptions\Operation\InvalidOperationException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Operation\OperationException::class),
                $this->getDependenciesFor(\Exceptions\Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[\Exceptions\Operation\NotImplementedException::class] = [
            \Exceptions\Operation\NotImplementedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Operation\OperationException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
            ),
        ];
        $dependencies[\Exceptions\Operation\UnexpectedException::class] = [
            \Exceptions\Operation\UnexpectedException::class,
            array_merge(
                $this->getDependenciesFor(\Exceptions\Operation\OperationException::class),
                $this->getDependenciesFor(\Exceptions\Tag\AbortedTag::class)
            ),
        ];
        
        return $dependencies;
    }
    
    /**
     * @dataProvider providesDependencies
     *
     * @param string   $className            Class to test dependencies for
     * @param string[] $declaredDependencies that the class should use directly or through parents
     */
    public function testDependencies(string $className, array $declaredDependencies)
    {
        
        // Find the parent items
        $testedClass = new ReflectionClass($className);
        
        // Massage data for easier visuals in case something breaks
        $foundDependencies = array_merge(
            array_unique(array_map(function (ReflectionClass $x) {
                return $x->getName();
            }, $this->getParentClasses($testedClass))),
            array_unique(array_map(function (ReflectionClass $x) {
                return $x->getName();
            }, $this->getParentInterfaces($testedClass))),
            array_unique(array_map(function (ReflectionClass $x) {
                return $x->getName();
            }, $this->getParentTraits($testedClass)))
        );
        sort($foundDependencies);
        sort($declaredDependencies);
        
        // Find the extra and missing items
        $missingDependencies = array_diff($declaredDependencies, $foundDependencies);
        $extraDependencies = array_diff($foundDependencies, $declaredDependencies);
        sort($missingDependencies);
        sort($extraDependencies);
        
        // Assert
        $this->assertCount(
            0,
            $missingDependencies,
            'Class ' . $className . ' has missing declared dependencies' . PHP_EOL
            . 'Found dependencies: ' . print_r($foundDependencies, true) . PHP_EOL
            . 'Declared dependencies: ' . print_r($declaredDependencies, true) . PHP_EOL
            . 'Missing dependencies: ' . print_r($missingDependencies, true) . PHP_EOL
        );
        $this->assertCount(
            0,
            $extraDependencies,
            'Class ' . $className . ' has extra undeclared dependencies' . PHP_EOL
            . 'Found dependencies: ' . print_r($foundDependencies, true) . PHP_EOL
            . 'Declared dependencies: ' . print_r($declaredDependencies, true) . PHP_EOL
            . 'Extra dependencies: ' . print_r($extraDependencies, true) . PHP_EOL
        );
    }
    
    /**
     * @param ReflectionClass $class
     *
     * @return ReflectionClass[]
     */
    public function getParentClasses(ReflectionClass $class): array
    {
        $parents = [];
        while ($parent = $class->getParentClass()) {
            $parents[] = $parent;
            $class = $parent;
        }
        return array_filter($parents, function (ReflectionClass $x) {
            return $x->getName() == 'RuntimeException'
                   || substr($x->getName(), 0, strlen('Exceptions\\')) == 'Exceptions\\';
        });
    }
    
    /**
     * @param ReflectionClass $class
     *
     * @return ReflectionClass[]
     */
    public function getParentInterfaces(ReflectionClass $class): array
    {
        $interfaces = $class->getInterfaces();
        foreach ($this->getParentClasses($class) as $parent) {
            $interfaces = array_merge($interfaces, $parent->getInterfaces());
        }
        return array_filter($interfaces, function (ReflectionClass $x) {
            return $x->getName() == 'RuntimeException'
                   || substr($x->getName(), 0, strlen('Exceptions\\')) == 'Exceptions\\';
        });
    }
    
    /**
     * @param ReflectionClass $class
     *
     * @return ReflectionClass[]
     */
    public function getParentTraits(ReflectionClass $class): array
    {
        $traits = $class->getTraits();
        foreach ($this->getParentClasses($class) as $parent) {
            $traits = array_merge($traits, $parent->getTraits());
        }
        return array_filter($traits, function (ReflectionClass $x) {
            return $x->getName() == 'RuntimeException'
                   || substr($x->getName(), 0, strlen('Exceptions\\')) == 'Exceptions\\';
        });
    }
}
