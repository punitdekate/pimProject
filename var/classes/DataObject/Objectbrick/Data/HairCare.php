<?php

/**
 * Fields Summary:
 * - hairProduct [select]
 * - hairType [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class HairCare extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "HairCare";
protected $hairProduct;
protected $hairType;


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
* Get hairProduct - Hair Product
* @return string|null
*/
public function getHairProduct(): ?string
{
	$data = $this->hairProduct;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("hairProduct")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("hairProduct");
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
* Set hairProduct - Hair Product
* @param string|null $hairProduct
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHairProduct (?string $hairProduct)
{
	$this->hairProduct = $hairProduct;

	return $this;
}

/**
* Get hairType - Hair Type
* @return string|null
*/
public function getHairType(): ?string
{
	$data = $this->hairType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("hairType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("hairType");
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
* Set hairType - Hair Type
* @param string|null $hairType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHairType (?string $hairType)
{
	$this->hairType = $hairType;

	return $this;
}

}

