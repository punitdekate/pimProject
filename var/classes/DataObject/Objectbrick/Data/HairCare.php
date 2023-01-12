<?php

/**
 * Fields Summary:
<<<<<<< HEAD
 * - Hair_Product [select]
 * - Hair_type [select]
=======
 * - hairProduct [select]
 * - hairType [select]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class HairCare extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "HairCare";
<<<<<<< HEAD
protected $Hair_Product;
protected $Hair_type;
=======
protected $hairProduct;
protected $hairType;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c


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
<<<<<<< HEAD
* Get Hair_Product - Hair _ Product  
* @return string|null
*/
public function getHair_Product(): ?string
{
	$data = $this->Hair_Product;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Hair_Product")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Hair_Product");
=======
* Get hairProduct - Hair Product
* @return string|null
*/
public function getHairProduct(): ?string
{
	$data = $this->hairProduct;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("hairProduct")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("hairProduct");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
<<<<<<< HEAD
* Set Hair_Product - Hair _ Product  
* @param string|null $Hair_Product
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHair_Product (?string $Hair_Product)
{
	$this->Hair_Product = $Hair_Product;
=======
* Set hairProduct - Hair Product
* @param string|null $hairProduct
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHairProduct (?string $hairProduct)
{
	$this->hairProduct = $hairProduct;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $this;
}

/**
<<<<<<< HEAD
* Get Hair_type - Hair _type
* @return string|null
*/
public function getHair_type(): ?string
{
	$data = $this->Hair_type;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Hair_type")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Hair_type");
=======
* Get hairType - Hair Type
* @return string|null
*/
public function getHairType(): ?string
{
	$data = $this->hairType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("hairType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("hairType");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
<<<<<<< HEAD
* Set Hair_type - Hair _type
* @param string|null $Hair_type
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHair_type (?string $Hair_type)
{
	$this->Hair_type = $Hair_type;
=======
* Set hairType - Hair Type
* @param string|null $hairType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHairType (?string $hairType)
{
	$this->hairType = $hairType;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $this;
}

}

