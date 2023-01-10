<?php

/**
 * Fields Summary:
 * - Material [select]
 * - ShoeType [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Footwear extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Footwear";
protected $Material;
protected $ShoeType;


/**
* Footwear constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get Material - Material
* @return string|null
*/
public function getMaterial(): ?string
{
	$data = $this->Material;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Material")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Material");
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
* Set Material - Material
* @param string|null $Material
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Footwear
*/
public function setMaterial (?string $Material)
{
	$this->Material = $Material;

	return $this;
}

/**
* Get ShoeType - Shoe Type
* @return string|null
*/
public function getShoeType(): ?string
{
	$data = $this->ShoeType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("ShoeType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("ShoeType");
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
* Set ShoeType - Shoe Type
* @param string|null $ShoeType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Footwear
*/
public function setShoeType (?string $ShoeType)
{
	$this->ShoeType = $ShoeType;

	return $this;
}

}

