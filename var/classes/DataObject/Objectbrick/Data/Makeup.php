<?php

/**
 * Fields Summary:
 * - Makeup_type [select]
 * - quantity [quantityValue]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Makeup extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Makeup";
protected $Makeup_type;
protected $quantity;


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
* Get Makeup_type - Makeup _type
* @return string|null
*/
public function getMakeup_type(): ?string
{
	$data = $this->Makeup_type;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Makeup_type")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Makeup_type");
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
* Set Makeup_type - Makeup _type
* @param string|null $Makeup_type
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setMakeup_type (?string $Makeup_type)
{
	$this->Makeup_type = $Makeup_type;

	return $this;
}

/**
* Get quantity - Quantity
* @return \Pimcore\Model\DataObject\Data\QuantityValue|null
*/
public function getQuantity(): ?\Pimcore\Model\DataObject\Data\QuantityValue
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
* @param \Pimcore\Model\DataObject\Data\QuantityValue|null $quantity
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup
*/
public function setQuantity (?\Pimcore\Model\DataObject\Data\QuantityValue $quantity)
{
	$this->quantity = $quantity;

	return $this;
}

}

