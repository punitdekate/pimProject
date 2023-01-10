<?php

/**
 * Fields Summary:
 * - Hair_Product [select]
 * - Hair_type [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class HairCare extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "HairCare";
protected $Hair_Product;
protected $Hair_type;


/**
* HairCare constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get Hair_Product - Hair _ Product  
* @return string|null
*/
public function getHair_Product(): ?string
{
	$data = $this->Hair_Product;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Hair_Product")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Hair_Product");
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
* Set Hair_Product - Hair _ Product  
* @param string|null $Hair_Product
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHair_Product (?string $Hair_Product)
{
	$this->Hair_Product = $Hair_Product;

	return $this;
}

/**
* Get Hair_type - Hair _type
* @return string|null
*/
public function getHair_type(): ?string
{
	$data = $this->Hair_type;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Hair_type")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Hair_type");
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
* Set Hair_type - Hair _type
* @param string|null $Hair_type
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHair_type (?string $Hair_type)
{
	$this->Hair_type = $Hair_type;

	return $this;
}

}

