<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Model;

use Macademy\JumpStart\Api\CategoryInterface;

class Product
{
    function __construct(
        private CategoryInterface $category,
    ) {}

    function getCategoryName()
    {
        return $this->category->getName();
    }
}