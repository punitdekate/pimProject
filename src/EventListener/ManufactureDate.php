<?php

namespace App\EventListener;

use PhpParser\Node\Expr\Instanceof_;
use Pimcore\Event\Model\ElementEventInterface;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Event\Model\AssetEvent;
use Pimcore\Event\Model\DocumentEvent;
use Pimcore\Model\Notification\Service\NotificationService;
use Pimcore\Model\DataObject\Feedback;
use Pimcore\Model\DataObject\Seller;

class ManufactureDate
{
    public function onObjectPreUpdate(\Pimcore\Event\Model\DataObjectEvent $e)
    {   $object = $e->getObject();
        if (!($object instanceof Feedback) && !($object instanceof Seller)) {
            $mdate = $object->getManufacturingDate();
            $edate = $object->getExpiryDate();
            if($mdate>$edate){
                throw new \Exception("Manufacturing Date cant be greater than Expiry date");
            }
        }
    }
}
