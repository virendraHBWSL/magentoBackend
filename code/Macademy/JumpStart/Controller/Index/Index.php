<?php

declare(strict_types=1);

namespace Macademy\JumpStart\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    public function execute()
    {
        die('jumpstart!');
    }
}
//this is index.php