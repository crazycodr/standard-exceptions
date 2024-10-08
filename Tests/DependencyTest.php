<?php

namespace Exceptions\Tests;

use Exceptions\Tag;
use Exceptions\Collection;
use Exceptions\Data;
use Exceptions\Helpers;
use Exceptions\Http;
use Exceptions\Operation;
use Exceptions\IO;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use RuntimeException;

class DependencyTest extends TestCase
{
    /**
     * Returns the dependencies for a specific class that is widely reused. This is used to simplify a lot the
     * hardcoded dependency maintenance.
     *
     * @param string $className
     *
     * @return string[]
     */
    public static function getDependenciesFor(string $className): array
    {
        return match ($className) {
            Collection\KeyAlreadyExistsException::class => array_merge(
                [$className],
                self::getDependenciesFor(Tag\AlreadyExistsTag::class)
            ),
            Collection\CollectionException::class => array_merge(
                [$className],
                self::getDependenciesFor(RuntimeException::class),
                self::getDependenciesFor(Collection\CollectionExceptionInterface::class),
                self::getDependenciesFor(Helpers\DefaultsInterface::class),
            ),
            Data\DataException::class => array_merge(
                [$className],
                self::getDependenciesFor(RuntimeException::class),
                self::getDependenciesFor(Data\DataExceptionInterface::class),
                self::getDependenciesFor(Helpers\DefaultsInterface::class),
            ),
            Http\HttpException::class => array_merge(
                [$className],
                self::getDependenciesFor(RuntimeException::class),
                self::getDependenciesFor(Http\HttpExceptionInterface::class),
                self::getDependenciesFor(Helpers\DefaultsInterface::class),
            ),
            Http\Client\ClientErrorException::class => array_merge(
                [$className],
                self::getDependenciesFor(Http\HttpException::class),
                self::getDependenciesFor(Http\Client\ClientErrorExceptionInterface::class),
            ),
            Http\Server\ServerErrorException::class => array_merge(
                [$className],
                self::getDependenciesFor(Http\HttpException::class),
                self::getDependenciesFor(Http\Server\ServerErrorExceptionInterface::class),
            ),
            IO\IOException::class => array_merge(
                [$className],
                self::getDependenciesFor(RuntimeException::class),
                self::getDependenciesFor(IO\IOExceptionInterface::class),
                self::getDependenciesFor(Helpers\DefaultsInterface::class),
            ),
            IO\Filesystem\FilesystemException::class => array_merge(
                [$className],
                self::getDependenciesFor(IO\IOException::class),
                self::getDependenciesFor(IO\Filesystem\FilesystemExceptionInterface::class)
            ),
            IO\Network\NetworkException::class => array_merge(
                [$className],
                self::getDependenciesFor(IO\IOException::class),
                self::getDependenciesFor(IO\Network\NetworkExceptionInterface::class)
            ),
            Operation\OperationException::class => array_merge(
                [$className],
                self::getDependenciesFor(RuntimeException::class),
                self::getDependenciesFor(Operation\OperationExceptionInterface::class),
                self::getDependenciesFor(Helpers\DefaultsInterface::class),
            ),
            default => [$className],
        };
    }

    /**
     * @return array
     */
    public static function providesDependencies(): array
    {
        // Will contain all scenarios to test with the class name to test and an array of all classes this class
        // should depend on
        $dependencies = [];

        // Collection exception dependencies
        $dependencies[Collection\EmptyException::class] = [
            Collection\EmptyException::class,
            array_merge(
                self::getDependenciesFor(Collection\CollectionException::class)
            ),
        ];
        $dependencies[Collection\FullException::class] = [
            Collection\FullException::class,
            array_merge(
                self::getDependenciesFor(Collection\CollectionException::class)
            ),
        ];
        $dependencies[Collection\KeyAlreadyExistsException::class] = [
            Collection\KeyAlreadyExistsException::class,
            array_merge(
                self::getDependenciesFor(Collection\CollectionException::class),
                self::getDependenciesFor(Tag\AlreadyExistsTag::class)
            ),
        ];
        $dependencies[Collection\KeyNotFoundException::class] = [
            Collection\KeyNotFoundException::class,
            array_merge(
                self::getDependenciesFor(Collection\CollectionException::class),
                self::getDependenciesFor(Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[Collection\ReadOnlyArrayException::class] = [
            Collection\ReadOnlyArrayException::class,
            array_merge(
                self::getDependenciesFor(Collection\CollectionException::class)
            ),
        ];
        $dependencies[Collection\ReadOnlyArrayItemException::class] = [
            Collection\ReadOnlyArrayItemException::class,
            array_merge(
                self::getDependenciesFor(Collection\CollectionException::class)
            ),
        ];

        // Data exception dependencies
        $dependencies[Data\FormatException::class] = [
            Data\FormatException::class,
            array_merge(
                self::getDependenciesFor(Data\DataException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Data\FoundTooLittleException::class] = [
            Data\FoundTooLittleException::class,
            array_merge(
                self::getDependenciesFor(Data\DataException::class)
            ),
        ];
        $dependencies[Data\FoundTooManyException::class] = [
            Data\FoundTooManyException::class,
            array_merge(
                self::getDependenciesFor(Data\DataException::class)
            ),
        ];
        $dependencies[Data\IntegrityException::class] = [
            Data\IntegrityException::class,
            array_merge(
                self::getDependenciesFor(Data\DataException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Data\NotFoundException::class] = [
            Data\NotFoundException::class,
            array_merge(
                self::getDependenciesFor(Data\DataException::class),
                self::getDependenciesFor(Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[Data\TypeException::class] = [
            Data\TypeException::class,
            array_merge(
                self::getDependenciesFor(Data\DataException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];

        // Http client exception dependencies
        $dependencies[Http\Client\BadRequestException::class] = [
            Http\Client\BadRequestException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\ConflictException::class] = [
            Http\Client\ConflictException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\ExpectationFailedException::class] = [
            Http\Client\ExpectationFailedException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\FailedDependencyException::class] = [
            Http\Client\FailedDependencyException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class)
            ),
        ];
        $dependencies[Http\Client\ForbiddenException::class] = [
            Http\Client\ForbiddenException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[Http\Client\GoneException::class] = [
            Http\Client\GoneException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[Http\Client\LengthRequiredException::class] = [
            Http\Client\LengthRequiredException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\LockedException::class] = [
            Http\Client\LockedException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[Http\Client\MethodNotAllowedException::class] = [
            Http\Client\MethodNotAllowedException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\MisdirectedRequestException::class] = [
            Http\Client\MisdirectedRequestException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class)
            ),
        ];
        $dependencies[Http\Client\NotAcceptableException::class] = [
            Http\Client\NotAcceptableException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\NotFoundException::class] = [
            Http\Client\NotFoundException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[Http\Client\PaymentRequiredException::class] = [
            Http\Client\PaymentRequiredException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[Http\Client\PreConditionFailedException::class] = [
            Http\Client\PreConditionFailedException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\PreConditionRequiredException::class] = [
            Http\Client\PreConditionRequiredException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\ProxyAuthorizationRequiredException::class] = [
            Http\Client\ProxyAuthorizationRequiredException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\UnauthorizedTag::class)
            ),
        ];
        $dependencies[Http\Client\RequestHeaderFieldsTooLargeException::class] = [
            Http\Client\RequestHeaderFieldsTooLargeException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\RequestTimeoutException::class] = [
            Http\Client\RequestTimeoutException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class)
            ),
        ];
        $dependencies[Http\Client\TooManyRequestsException::class] = [
            Http\Client\TooManyRequestsException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[Http\Client\UnauthorizedException::class] = [
            Http\Client\UnauthorizedException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\UnauthorizedTag::class)
            ),
        ];
        $dependencies[Http\Client\UnavailableForLegalReasonsException::class] = [
            Http\Client\UnavailableForLegalReasonsException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[Http\Client\UnprocessableEntityException::class] = [
            Http\Client\UnprocessableEntityException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\UnsupportedMediaTypeException::class] = [
            Http\Client\UnsupportedMediaTypeException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\UpgradeRequiredException::class] = [
            Http\Client\UpgradeRequiredException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\URITooLongException::class] = [
            Http\Client\URITooLongException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Http\Client\UnrecoverableErrorException::class] = [
            Http\Client\UnrecoverableErrorException::class,
            array_merge(
                self::getDependenciesFor(Http\Client\ClientErrorException::class),
            ),
        ];

        // Http server exception dependencies
        $dependencies[Http\Server\BadGatewayException::class] = [
            Http\Server\BadGatewayException::class,
            array_merge(
                self::getDependenciesFor(Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[Http\Server\GatewayTimeoutException::class] = [
            Http\Server\GatewayTimeoutException::class,
            array_merge(
                self::getDependenciesFor(Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[Http\Server\HttpVersionNotSupportedException::class] = [
            Http\Server\HttpVersionNotSupportedException::class,
            array_merge(
                self::getDependenciesFor(Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[Http\Server\InsufficientStorageException::class] = [
            Http\Server\InsufficientStorageException::class,
            array_merge(
                self::getDependenciesFor(Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[Http\Server\InternalServerErrorException::class] = [
            Http\Server\InternalServerErrorException::class,
            array_merge(
                self::getDependenciesFor(Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[Http\Server\LoopDetectedException::class] = [
            Http\Server\LoopDetectedException::class,
            array_merge(
                self::getDependenciesFor(Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[Http\Server\NotImplementedException::class] = [
            Http\Server\NotImplementedException::class,
            array_merge(
                self::getDependenciesFor(Http\Server\ServerErrorException::class)
            ),
        ];
        $dependencies[Http\Server\ServiceUnavailableException::class] = [
            Http\Server\ServiceUnavailableException::class,
            array_merge(
                self::getDependenciesFor(Http\Server\ServerErrorException::class)
            ),
        ];

        // Filesystem exception dependencies
        $dependencies[IO\Filesystem\DirectoryAlreadyExistsException::class] = [
            IO\Filesystem\DirectoryAlreadyExistsException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\AlreadyExistsTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\DirectoryNotFoundException::class] = [
            IO\Filesystem\DirectoryNotFoundException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\DirectoryNotReadableException::class] = [
            IO\Filesystem\DirectoryNotReadableException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\DirectoryNotWritableException::class] = [
            IO\Filesystem\DirectoryNotWritableException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\FileAlreadyExistsException::class] = [
            IO\Filesystem\FileAlreadyExistsException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\AlreadyExistsTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\FileNotFoundException::class] = [
            IO\Filesystem\FileNotFoundException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\NotFoundTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\FileNotReadableException::class] = [
            IO\Filesystem\FileNotReadableException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\FileNotWritableException::class] = [
            IO\Filesystem\FileNotWritableException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\NoMoreSpaceException::class] = [
            IO\Filesystem\NoMoreSpaceException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
            ),
        ];
        $dependencies[IO\Filesystem\NotADirectoryException::class] = [
            IO\Filesystem\NotADirectoryException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[IO\Filesystem\NotAFileException::class] = [
            IO\Filesystem\NotAFileException::class,
            array_merge(
                self::getDependenciesFor(IO\Filesystem\FilesystemException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];

        // Network exception dependencies
        $dependencies[IO\Network\ConnectionLostException::class] = [
            IO\Network\ConnectionLostException::class,
            array_merge(
                self::getDependenciesFor(IO\Network\NetworkException::class),
            ),
        ];
        $dependencies[IO\Network\ConnectionRefusedException::class] = [
            IO\Network\ConnectionRefusedException::class,
            array_merge(
                self::getDependenciesFor(IO\Network\NetworkException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[IO\Network\ConnectionTimeoutException::class] = [
            IO\Network\ConnectionTimeoutException::class,
            array_merge(
                self::getDependenciesFor(IO\Network\NetworkException::class),
            ),
        ];
        $dependencies[IO\Network\RequestTimeoutException::class] = [
            IO\Network\RequestTimeoutException::class,
            array_merge(
                self::getDependenciesFor(IO\Network\NetworkException::class),
            ),
        ];
        $dependencies[IO\Network\UnexpectedResponseException::class] = [
            IO\Network\UnexpectedResponseException::class,
            array_merge(
                self::getDependenciesFor(IO\Network\NetworkException::class),
            ),
        ];
        $dependencies[IO\Network\UnknownHostException::class] = [
            IO\Network\UnknownHostException::class,
            array_merge(
                self::getDependenciesFor(IO\Network\NetworkException::class),
                self::getDependenciesFor(Tag\NotFoundTag::class)
            ),
        ];

        // Operation exception dependencies
        $dependencies[Operation\AuthorizationException::class] = [
            Operation\AuthorizationException::class,
            array_merge(
                self::getDependenciesFor(Operation\OperationException::class),
                self::getDependenciesFor(Tag\UnauthorizedTag::class),
            ),
        ];
        $dependencies[Operation\ForbiddenException::class] = [
            Operation\ForbiddenException::class,
            array_merge(
                self::getDependenciesFor(Operation\OperationException::class),
                self::getDependenciesFor(Tag\ForbiddenTag::class)
            ),
        ];
        $dependencies[Operation\InvalidOperationException::class] = [
            Operation\InvalidOperationException::class,
            array_merge(
                self::getDependenciesFor(Operation\OperationException::class),
                self::getDependenciesFor(Tag\InvalidDataTag::class)
            ),
        ];
        $dependencies[Operation\NotImplementedException::class] = [
            Operation\NotImplementedException::class,
            array_merge(
                self::getDependenciesFor(Operation\OperationException::class),
            ),
        ];
        $dependencies[Operation\UnexpectedException::class] = [
            Operation\UnexpectedException::class,
            array_merge(
                self::getDependenciesFor(Operation\OperationException::class),
            ),
        ];

        return $dependencies;
    }

    /**
     * @param string $className Class to test dependencies for
     * @param string[] $declaredDependencies that the class should use directly or through parents
     * @throws ReflectionException
     */
    #[DataProvider('providesDependencies')]
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
                || str_starts_with($x->getName(), 'Exceptions\\');
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
                || str_starts_with($x->getName(), 'Exceptions\\');
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
                || str_starts_with($x->getName(), 'Exceptions\\');
        });
    }
}
