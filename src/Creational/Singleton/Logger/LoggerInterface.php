<?php

namespace Codenip\Creational\Singleton\Logger;

interface LoggerInterface
{
    public function log(string $message): void;
}