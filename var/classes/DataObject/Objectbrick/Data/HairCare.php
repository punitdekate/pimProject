<?php

/**
 * Fields Summary:
<<<<<<< HEAD
<<<<<<< HEAD
 * - Hair_Product [select]
 * - Hair_type [select]
=======
 * - hairProduct [select]
 * - hairType [select]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
 * - hairProduct [select]
 * - hairType [select]
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class HairCare extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "HairCare";
<<<<<<< HEAD
<<<<<<< HEAD
protected $Hair_Product;
protected $Hair_type;
=======
protected $hairProduct;
protected $hairType;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
protected $hairProduct;
protected $hairType;
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b


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
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Get hairProduct - Hair Product
* @return string|null
*/
public function getHairProduct(): ?string
{
	$data = $this->hairProduct;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("hairProduct")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("hairProduct");
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
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
<<<<<<< HEAD
* Set Hair_Product - Hair _ Product  
* @param string|null $Hair_Product
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHair_Product (?string $Hair_Product)
{
	$this->Hair_Product = $Hair_Product;
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Set hairProduct - Hair Product
* @param string|null $hairProduct
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHairProduct (?string $hairProduct)
{
	$this->hairProduct = $hairProduct;
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b

	return $this;
}

/**
<<<<<<< HEAD
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
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Get hairType - Hair Type
* @return string|null
*/
public function getHairType(): ?string
{
	$data = $this->hairType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("hairType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("hairType");
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
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
<<<<<<< HEAD
* Set Hair_type - Hair _type
* @param string|null $Hair_type
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHair_type (?string $Hair_type)
{
	$this->Hair_type = $Hair_type;
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Set hairType - Hair Type
* @param string|null $hairType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare
*/
public function setHairType (?string $hairType)
{
	$this->hairType = $hairType;
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b

	return $this;
}

}

