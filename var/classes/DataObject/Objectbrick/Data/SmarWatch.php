<?php

/**
 * Fields Summary:
 * - dialShape [select]
 * - strapMaterial [select]
<<<<<<< HEAD
 * - features [multiselect]
=======
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class SmarWatch extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "SmarWatch";
protected $dialShape;
protected $strapMaterial;
<<<<<<< HEAD
protected $features;
=======
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0


/**
* SmarWatch constructor.
* @param DataObject\Concrete $object
*/
public function __construct(DataObject\Concrete $object)
{
	parent::__construct($object);
	$this->markFieldDirty("_self");
}


/**
* Get dialShape - Dial Shape
* @return string|null
*/
public function getDialShape(): ?string
{
	$data = $this->dialShape;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("dialShape")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("dialShape");
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
* Set dialShape - Dial Shape
* @param string|null $dialShape
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SmarWatch
*/
public function setDialShape (?string $dialShape)
{
	$this->dialShape = $dialShape;

	return $this;
}

/**
* Get strapMaterial - Strap Material
* @return string|null
*/
public function getStrapMaterial(): ?string
{
	$data = $this->strapMaterial;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("strapMaterial")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("strapMaterial");
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
* Set strapMaterial - Strap Material
* @param string|null $strapMaterial
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SmarWatch
*/
public function setStrapMaterial (?string $strapMaterial)
{
	$this->strapMaterial = $strapMaterial;

	return $this;
}

<<<<<<< HEAD
/**
* Get features - Features
* @return string[]|null
*/
public function getFeatures(): ?array
{
	$data = $this->features;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("features")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("features");
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
* Set features - Features
* @param string[]|null $features
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SmarWatch
*/
public function setFeatures (?array $features)
{
	$this->features = $features;

	return $this;
}

=======
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
}

