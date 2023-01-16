<?php

/**
 * Fields Summary:
 * - RAM [select]
 * - internalStorage [select]
 * - Processor [select]
 * - graphicCardName [input]
 * - graphicCardSize [select]
 * - screenSize [slider]
 * - Resolution [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class Laptop extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "Laptop";
protected $RAM;
protected $internalStorage;
protected $Processor;
protected $graphicCardName;
protected $graphicCardSize;
protected $screenSize;
protected $Resolution;


/**
* Laptop constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get RAM - R A M
* @return string|null
*/
public function getRAM(): ?string
{
	$data = $this->RAM;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("RAM")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("RAM");
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
* Set RAM - R A M
* @param string|null $RAM
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setRAM (?string $RAM)
{
	$this->RAM = $RAM;

	return $this;
}

/**
* Get internalStorage - Internal Storage
* @return string|null
*/
public function getInternalStorage(): ?string
{
	$data = $this->internalStorage;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("internalStorage")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("internalStorage");
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
* Set internalStorage - Internal Storage
* @param string|null $internalStorage
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setInternalStorage (?string $internalStorage)
{
	$this->internalStorage = $internalStorage;

	return $this;
}

/**
* Get Processor - Processor
* @return string|null
*/
public function getProcessor(): ?string
{
	$data = $this->Processor;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Processor")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Processor");
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
* Set Processor - Processor
* @param string|null $Processor
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setProcessor (?string $Processor)
{
	$this->Processor = $Processor;

	return $this;
}

/**
* Get graphicCardName - Graphic Card Name
* @return string|null
*/
public function getGraphicCardName(): ?string
{
	$data = $this->graphicCardName;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("graphicCardName")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("graphicCardName");
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
* Set graphicCardName - Graphic Card Name
* @param string|null $graphicCardName
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setGraphicCardName (?string $graphicCardName)
{
	$this->graphicCardName = $graphicCardName;

	return $this;
}

/**
* Get graphicCardSize - Graphic Card Size
* @return string|null
*/
public function getGraphicCardSize(): ?string
{
	$data = $this->graphicCardSize;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("graphicCardSize")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("graphicCardSize");
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
* Set graphicCardSize - Graphic Card Size
* @param string|null $graphicCardSize
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setGraphicCardSize (?string $graphicCardSize)
{
	$this->graphicCardSize = $graphicCardSize;

	return $this;
}

/**
* Get screenSize - Screen Size(inches)
* @return float|null
*/
public function getScreenSize(): ?float
{
	$data = $this->screenSize;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("screenSize")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("screenSize");
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
* Set screenSize - Screen Size(inches)
* @param float|null $screenSize
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setScreenSize (?float $screenSize)
{
	$this->screenSize = $screenSize;

	return $this;
}

/**
* Get Resolution - Resolution
* @return string|null
*/
public function getResolution(): ?string
{
	$data = $this->Resolution;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("Resolution")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("Resolution");
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
* Set Resolution - Resolution
* @param string|null $Resolution
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop
*/
public function setResolution (?string $Resolution)
{
	$this->Resolution = $Resolution;

	return $this;
}

}

