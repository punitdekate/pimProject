<?php

/**
 * Fields Summary:
 * - Fragrance_product [select]
 * - Strength [select]
 * - fregrance_Categories [select]
 * - Quantity [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Fragrances extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "fragrances";
protected $Fragrance_product;
protected $Strength;
protected $fregrance_Categories;
protected $Quantity;


/**
* Fragrances constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get Fragrance_product - Fragrance _product
* @return string|null
*/
public function getFragrance_product(): ?string
{
	$data = $this->Fragrance_product;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Fragrance_product")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Fragrance_product");
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
* Set Fragrance_product - Fragrance _product
* @param string|null $Fragrance_product
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Fragrances
*/
public function setFragrance_product (?string $Fragrance_product)
{
	$this->Fragrance_product = $Fragrance_product;

	return $this;
}

/**
* Get Strength - Strength
* @return string|null
*/
public function getStrength(): ?string
{
	$data = $this->Strength;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Strength")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Strength");
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
* Set Strength - Strength
* @param string|null $Strength
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Fragrances
*/
public function setStrength (?string $Strength)
{
	$this->Strength = $Strength;

	return $this;
}

/**
* Get fregrance_Categories - Fregrance   Categories
* @return string|null
*/
public function getFregrance_Categories(): ?string
{
	$data = $this->fregrance_Categories;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fregrance_Categories")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("fregrance_Categories");
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
* Set fregrance_Categories - Fregrance   Categories
* @param string|null $fregrance_Categories
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Fragrances
*/
public function setFregrance_Categories (?string $fregrance_Categories)
{
	$this->fregrance_Categories = $fregrance_Categories;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Fragrances
*/
public function setQuantity (?\Pimcore\Model\DataObject\Data\QuantityValue $Quantity)
{
	$this->Quantity = $Quantity;

	return $this;
}

}

