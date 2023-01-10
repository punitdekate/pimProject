<?php

/**
 * Fields Summary:
 * - ClotheType [select]
 * - Size [select]
 * - SleeveType [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Ethnic extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Ethnic";
protected $ClotheType;
protected $Size;
protected $SleeveType;


/**
* Ethnic constructor.
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
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Ethnic
*/
public function setClotheType (?string $ClotheType)
{
	$this->ClotheType = $ClotheType;

	return $this;
}

/**
* Get Size - Size
* @return string|null
*/
public function getSize(): ?string
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
* @param string|null $Size
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Ethnic
*/
public function setSize (?string $Size)
{
	$this->Size = $Size;

	return $this;
}

/**
* Get SleeveType - Sleeve Type
* @return string|null
*/
public function getSleeveType(): ?string
{
	$data = $this->SleeveType;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("SleeveType")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("SleeveType");
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
* Set SleeveType - Sleeve Type
* @param string|null $SleeveType
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Ethnic
*/
public function setSleeveType (?string $SleeveType)
{
	$this->SleeveType = $SleeveType;

	return $this;
}

}

