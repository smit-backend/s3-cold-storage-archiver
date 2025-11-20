<?php

declare(strict_types=1);

namespace SmitBackend\GlacierArchiver\Support;

class BufferPool
{
    private static array $pool = [];

    public static function acquire(): array
    {
        return array_pop(self::$pool) ?? [];
    }

    public static function release(array $buffer): void
    {
        self::$pool[] = [];
    }
}
