<?php

namespace Codenip\Creational\Singleton\Logger;

class FileLogger implements LoggerInterface
{

    public function log(string $message): void
    {
        echo sprintf('Writing log message to file: %s', $message);
    }
}