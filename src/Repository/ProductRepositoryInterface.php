<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Repository;

use Sylius\Component\Core\Repository\ProductRepositoryInterface as BaseProductRepositoryInterface;

interface ProductRepositoryInterface extends BaseProductRepositoryInterface
{
    public function findAllByOnHand(int $limit): array;

}
