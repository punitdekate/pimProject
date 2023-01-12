<?php

/**
 * Fields Summary:
<<<<<<< HEAD
 * - skincare_Product [select]
 * - Material [select]
 * - Quantity [quantityValue]
=======
 * - skinCareProduct [select]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class SkinCare extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "SkinCare";
<<<<<<< HEAD
protected $skincare_Product;
protected $Material;
protected $Quantity;
=======
protected $skinCareProduct;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c


/**
* SkinCare constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
<<<<<<< HEAD
* Get skincare_Product - Skincare _ Product
* @return string|null
*/
public function getSkincare_Product(): ?string
{
	$data = $this->skincare_Product;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("skincare_Product")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("skincare_Product");
=======
* Get skinCareProduct - Skin Care Product
* @return string|null
*/
public function getSkinCareProduct(): ?string
{
	$data = $this->skinCareProduct;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("skinCareProduct")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("skinCareProduct");
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
* Set skincare_Product - Skincare _ Product
* @param string|null $skincare_Product
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SkinCare
*/
public function setSkincare_Product (?string $skincare_Product)
{
	$this->skincare_Product = $skincare_Product;

	return $this;
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SkinCare
*/
public function setMaterial (?string $Material)
{
	$this->Material = $Material;

	return $this;
}

/**
* Get Quantity - Quantity
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getQuantity(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
	$data = $this->Quantity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Quantity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Quantity");
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
* Set Quantity - Quantity
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $Quantity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SkinCare
*/
public function setQuantity (?\Pimcore\Model\DataObject\Data\QuantityValue $Quantity)
{
	$this->Quantity = $Quantity;
=======
* Set skinCareProduct - Skin Care Product
* @param string|null $skinCareProduct
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SkinCare
*/
public function setSkinCareProduct (?string $skinCareProduct)
{
	$this->skinCareProduct = $skinCareProduct;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $this;
}

}

