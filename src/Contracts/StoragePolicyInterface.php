<?php

declare(strict_types=1);

namespace SmitBackend\GlacierArchiver\Contracts;

/**
 * Interface StoragePolicyInterface
 *
 * @package SmitBackend\GlacierArchiver
 */
interface StoragePolicyInterface
{
    public function execute(array $payload = []): mixed;
}
