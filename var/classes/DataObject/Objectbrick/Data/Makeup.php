<?php

/**
 * Fields Summary:
<<<<<<< HEAD
<<<<<<< HEAD
 * - Makeup_Type [select]
 * - Quantity [quantityValue]
=======
 * - Makeup_type [select]
 * - quantity [quantityValue]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
 * - Makeup_type [select]
 * - quantity [quantityValue]
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Makeup extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Makeup";
<<<<<<< HEAD
<<<<<<< HEAD
protected $Makeup_Type;
protected $Quantity;
=======
protected $Makeup_type;
protected $quantity;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
protected $Makeup_type;
protected $quantity;
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b


/**
* Makeup constructor.
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
* Get Makeup_Type - Makeup _ Type
* @return string|null
*/
public function getMakeup_Type(): ?string
{
	$data = $this->Makeup_Type;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Makeup_Type")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Makeup_Type");
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Get Makeup_type - Makeup _type
* @return string|null
*/
public function getMakeup_type(): ?string
{
	$data = $this->Makeup_type;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Makeup_type")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Makeup_type");
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
* Set Makeup_Type - Makeup _ Type
* @param string|null $Makeup_Type
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setMakeup_Type (?string $Makeup_Type)
{
	$this->Makeup_Type = $Makeup_Type;
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Set Makeup_type - Makeup _type
* @param string|null $Makeup_type
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setMakeup_type (?string $Makeup_type)
{
	$this->Makeup_type = $Makeup_type;
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b

	return $this;
}

/**
<<<<<<< HEAD
<<<<<<< HEAD
* Get Quantity - Quantity
=======
* Get quantity - Quantity
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
* Get quantity - Quantity
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getQuantity(): ?\Pimcore\Model\DataObject\Data\QuantityValue
{
<<<<<<< HEAD
<<<<<<< HEAD
	$data = $this->Quantity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Quantity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Quantity");
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
	$data = $this->quantity;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("quantity")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("quantity");
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
* Set Quantity - Quantity
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $Quantity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setQuantity (?\Pimcore\Model\DataObject\Data\QuantityValue $Quantity)
{
	$this->Quantity = $Quantity;
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Set quantity - Quantity
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $quantity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setQuantity (?\Pimcore\Model\DataObject\Data\QuantityValue $quantity)
{
	$this->quantity = $quantity;
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b

	return $this;
}

}

