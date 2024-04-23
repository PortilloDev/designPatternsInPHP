<?php

namespace Codenip\Tests\Creational\Singleton;

use Codenip\Creational\Singleton\Factory\LoggerFactory;
use Codenip\Creational\Singleton\Logger\FileLogger;
use \InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingletonInstance(): void
    {
        $instance1 = LoggerFactory::getInstance();
        $instance2 = LoggerFactory::getInstance();

        self::assertSame($instance1, $instance2);
        $instance1::reset();
    }

    public function testCreateFileLoggerInstance(): void
    {
        $instance1 = LoggerFactory::getInstance();

        $logger = $instance1->createLogger();

        self::assertInstanceOf(FileLogger::class, $logger);
        $instance1::reset();
    }
    public function testCreateInvalidLoggerInstance(): void
    {
        self::expectException(InvalidArgumentException::class);
        $instance1 = LoggerFactory::getInstance('invalid');

        $instance1->createLogger();
    }

}