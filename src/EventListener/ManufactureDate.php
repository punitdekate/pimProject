<?php

namespace App\EventListener;

use Pimcore\Event\Model\ElementEventInterface;
use Pimcore\Event\Model\DataObjectEvent;
use Pimcore\Event\Model\AssetEvent;
use Pimcore\Event\Model\DocumentEvent;
use Pimcore\Model\Notification\Service\NotificationService;
use Pimcore\Model\DataObject;

class ManufactureDate
{
    public function onObjectPreUpdate(DataObjectEvent $e)
    {
        $object = $e->getObject();
            $manufacture = $object->getManufacturingDate();
            $expiry = $object->getExpiryDate();
            if($manufacture>$expiry){
                throw new \Exception("Manufacturing date cannot be less than expiry date");
            }
    }
}
