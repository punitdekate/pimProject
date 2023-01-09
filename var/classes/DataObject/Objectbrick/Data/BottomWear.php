<?php

/**
 * Fields Summary:
 * - ClotheType [select]
 * - Size [slider]
 * - Distress [select]
 * - rise [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class BottomWear extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "BottomWear";
protected $ClotheType;
protected $Size;
protected $Distress;
protected $rise;


/**
* BottomWear constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get ClotheType - Clothe Type
* @return string|null
*/
public function getClotheType(): ?string
{
	$data = $this->ClotheType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("ClotheType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("ClotheType");
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
* Set ClotheType - Clothe Type
* @param string|null $ClotheType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\BottomWear
*/
public function setClotheType (?string $ClotheType)
{
	$this->ClotheType = $ClotheType;

	return $this;
}

/**
* Get Size - Size
* @return float|null
*/
public function getSize(): ?float
{
	$data = $this->Size;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Size")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Size");
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
* Set Size - Size
* @param float|null $Size
* @return \Pimcore\Model\DataObject\Objectbrick\Data\BottomWear
*/
public function setSize (?float $Size)
{
	$this->Size = $Size;

	return $this;
}

/**
* Get Distress - Distress
* @return string|null
*/
public function getDistress(): ?string
{
	$data = $this->Distress;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Distress")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Distress");
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
* Set Distress - Distress
* @param string|null $Distress
* @return \Pimcore\Model\DataObject\Objectbrick\Data\BottomWear
*/
public function setDistress (?string $Distress)
{
	$this->Distress = $Distress;

	return $this;
}

/**
* Get rise - Rise
* @return string|null
*/
public function getRise(): ?string
{
	$data = $this->rise;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("rise")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("rise");
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
* Set rise - Rise
* @param string|null $rise
* @return \Pimcore\Model\DataObject\Objectbrick\Data\BottomWear
*/
public function setRise (?string $rise)
{
	$this->rise = $rise;

	return $this;
}

}

