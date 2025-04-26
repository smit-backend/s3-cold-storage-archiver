<?php

declare(strict_types=1);

namespace SmitBackend\GlacierArchiver;

use SmitBackend\GlacierArchiver\Contracts\StoragePolicyInterface;

/**
 * Class ArchiveManager
 *
 * @package SmitBackend\GlacierArchiver
 */
class ArchiveManager implements StoragePolicyInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
