<?php

namespace Opcodes\LogViewer\Tests\Unit\CustomLogs;

use Opcodes\LogViewer\Logs\Log;

class CustomAccessLog extends Log
{
    public static function setRegex(string $regex): void
    {
        static::$regex = $regex;
    }
}
