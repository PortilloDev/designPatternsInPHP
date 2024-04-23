<?php

namespace Codenip\Creational\Singleton\Factory;

use Codenip\Creational\Singleton\Logger\LoggerInterface;
use Codenip\Creational\Singleton\Logger\FileLogger;
use \InvalidArgumentException;

class LoggerFactory
{
    private static ?LoggerFactory $instance = null;

    private function __construct(private string $loggerType)
    {
    }

    private function __clone()
    {
    }

    public function __wakeup(): void
    {
    }

    public static function getInstance(string $loggerType = 'file'): LoggerFactory
    {
        if (self::$instance === null) {
            self::$instance = new self($loggerType);
        }

        return self::$instance;
    }

    public function createLogger(): LoggerInterface
    {
       if ($this->loggerType === 'file') {
           return new FileLogger();

       }
       throw new InvalidArgumentException(sprintf('Unsupported logged type: %s', $this->loggerType));
    }

    public static function reset(): void
    {
        self::$instance = null;
    }
}