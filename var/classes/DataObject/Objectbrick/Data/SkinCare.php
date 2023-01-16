<?php

/**
 * Fields Summary:
 * - skinCareProduct [select]
 */

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;


class SkinCare extends DataObject\Objectbrick\Data\AbstractData
{
protected $type = "SkinCare";
protected $skinCareProduct;


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
* Get skinCareProduct - Skin Care Product
* @return string|null
*/
public function getSkinCareProduct(): ?string
{
	$data = $this->skinCareProduct;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("skinCareProduct")->isEmpty($data)) {
		try {
			return $this->getValueFromParent("skinCareProduct");
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
* Set skinCareProduct - Skin Care Product
* @param string|null $skinCareProduct
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SkinCare
*/
public function setSkinCareProduct (?string $skinCareProduct)
{
	$this->skinCareProduct = $skinCareProduct;

	return $this;
}

}

