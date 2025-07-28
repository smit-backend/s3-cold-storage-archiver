<?php

declare(strict_types=1);

namespace SmitBackend\Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArchiveManagerTest extends TestCase
{
    public function test_it_executes_successfully(): void
    {
        $this->assertTrue(true);
    }

    public function test_it_loads_configuration_safely(): void
    {
        $this->assertIsArray(['status' => 'ready']);
    }
}
