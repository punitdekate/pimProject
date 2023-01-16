<?php

/**
 * Fields Summary:
 * - deviceType [select]
 * - earphoneType [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Earphone extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Earphone";
protected $deviceType;
protected $earphoneType;


/**
* Earphone constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get deviceType - Device Type
* @return string|null
*/
public function getDeviceType(): ?string
{
	$data = $this->deviceType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("deviceType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("deviceType");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set deviceType - Device Type
* @param string|null $deviceType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Earphone
*/
public function setDeviceType (?string $deviceType)
{
	$this->deviceType = $deviceType;

	return $this;
}

/**
* Get earphoneType - Earphone Type
* @return string|null
*/
public function getEarphoneType(): ?string
{
	$data = $this->earphoneType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("earphoneType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("earphoneType");
		} catch (InheritanceParentNotFoundException $e) {
			// no data from parent available, continue ...
		}
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set earphoneType - Earphone Type
* @param string|null $earphoneType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Earphone
*/
public function setEarphoneType (?string $earphoneType)
{
	$this->earphoneType = $earphoneType;

	return $this;
}

}

