<?php

/**
 * Fields Summary:
 * - Makeup_Type [select]
 * - Quantity [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Makeup extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Makeup";
protected $Makeup_Type;
protected $Quantity;


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
* Get Makeup_Type - Makeup _ Type
* @return string|null
*/
public function getMakeup_Type(): ?string
{
	$data = $this->Makeup_Type;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Makeup_Type")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Makeup_Type");
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
* Set Makeup_Type - Makeup _ Type
* @param string|null $Makeup_Type
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setMakeup_Type (?string $Makeup_Type)
{
	$this->Makeup_Type = $Makeup_Type;

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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setQuantity (?\Pimcore\Model\DataObject\Data\QuantityValue $Quantity)
{
	$this->Quantity = $Quantity;

	return $this;
}

}

