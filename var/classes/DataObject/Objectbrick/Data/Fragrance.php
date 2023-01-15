<?php

/**
 * Fields Summary:
 * - fragranceProduct [select]
 * - Strength [select]
 * - quantity [numeric]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Fragrance extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Fragrance";
protected $fragranceProduct;
protected $Strength;
protected $quantity;


/**
* Fragrance constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get fragranceProduct - Fragrance Product
* @return string|null
*/
public function getFragranceProduct(): ?string
{
	$data = $this->fragranceProduct;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fragranceProduct")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("fragranceProduct");
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
* Set fragranceProduct - Fragrance Product
* @param string|null $fragranceProduct
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Fragrance
*/
public function setFragranceProduct (?string $fragranceProduct)
{
	$this->fragranceProduct = $fragranceProduct;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Fragrance
*/
public function setStrength (?string $Strength)
{
	$this->Strength = $Strength;

	return $this;
}

/**
* Get quantity - Quantity
* @return float|null
*/
public function getQuantity(): ?float
{
	$data = $this->quantity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("quantity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("quantity");
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
* Set quantity - Quantity
* @param float|null $quantity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Fragrance
*/
public function setQuantity (?float $quantity)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getDefinition()->getFieldDefinition("quantity");
	$this->quantity = $fd->preSetData($this, $quantity);
	return $this;
}

}

