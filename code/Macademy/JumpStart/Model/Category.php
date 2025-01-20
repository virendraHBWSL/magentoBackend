<?php

declare(strict_types=1);

namespace Macademy\JumpStart\Model;

use Macademy\Jumpstart\Api\CategoryInterface;

class Category implements CategoryInterface
{
    protected $name;

    public function getName()
    {
        return $this->category->getName();
    }
}