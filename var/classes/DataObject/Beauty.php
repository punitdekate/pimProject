<?php

/**
 * Inheritance: no
 * Variants: no
 * Contain information about clothing class and its attributes
 * 
 *
 * Fields Summary:
<<<<<<< HEAD
 * - BaseAttributes [classificationstore]
 * - BeautySpecific [objectbricks]
=======
 * - productId [input]
 * - pruductName [input]
 * - description [textarea]
 * - price [numeric]
 * - beautySpecific [objectbricks]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
 * - ProductImage [image]
 * - ProductColor [rgbaColor]
 * - featuresSpecification [classificationstore]
 * - manufacturerDetails [classificationstore]
 * - sellerDetails [classificationstore]
 * - ExtraAttributes [block]
 * -- AttributeName [input]
 * -- AttributeDetails [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Beauty\Listing getList(array $config = [])
<<<<<<< HEAD
=======
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByProductId($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByPruductName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByProductImage($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Beauty extends Concrete
{
<<<<<<< HEAD
protected $o_classId = "1";
protected $o_className = "beauty";
protected $BaseAttributes;
protected $BeautySpecific;
=======
protected $o_classId = "beauty";
protected $o_className = "beauty";
protected $productId;
protected $pruductName;
protected $description;
protected $price;
protected $beautySpecific;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
protected $ProductImage;
protected $ProductColor;
protected $featuresSpecification;
protected $manufacturerDetails;
protected $sellerDetails;
protected $ExtraAttributes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Beauty
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
<<<<<<< HEAD
* Get BaseAttributes - Base Attributes
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getBaseAttributes(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("BaseAttributes");
=======
* Get productId - Product Id
* @return string|null
*/
public function getProductId(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productId");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->productId;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set productId - Product Id
* @param string|null $productId
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setProductId(?string $productId)
{
	$this->productId = $productId;

	return $this;
}

/**
* Get pruductName - Pruduct Name
* @return string|null
*/
public function getPruductName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("pruductName");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->getClass()->getFieldDefinition("BaseAttributes")->preGetData($this);
=======
	$data = $this->pruductName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $data;
}

/**
<<<<<<< HEAD
* Set BaseAttributes - Base Attributes
* @param \Pimcore\Model\DataObject\Classificationstore|null $BaseAttributes
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setBaseAttributes(?\Pimcore\Model\DataObject\Classificationstore $BaseAttributes)
{
	$this->BaseAttributes = $BaseAttributes;
=======
* Set pruductName - Pruduct Name
* @param string|null $pruductName
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setPruductName(?string $pruductName)
{
	$this->pruductName = $pruductName;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $this;
}

/**
<<<<<<< HEAD
=======
* Get description - Description
* @return string|null
*/
public function getDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->description;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set description - Description
* @param string|null $description
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setDescription(?string $description)
{
	$this->description = $description;

	return $this;
}

/**
* Get price - Price
* @return float|null
*/
public function getPrice(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("price");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->price;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set price - Price
* @param float|null $price
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setPrice(?float $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
* @return \Pimcore\Model\DataObject\Beauty\BeautySpecific
*/
public function getBeautySpecific(): ?\Pimcore\Model\DataObject\Objectbrick
{
<<<<<<< HEAD
	$data = $this->BeautySpecific;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\BeautySpecific")) {
			$data = new \Pimcore\Model\DataObject\Beauty\BeautySpecific($this, "BeautySpecific");
			$this->BeautySpecific = $data;
=======
	$data = $this->beautySpecific;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\BeautySpecific")) {
			$data = new \Pimcore\Model\DataObject\Beauty\BeautySpecific($this, "beautySpecific");
			$this->beautySpecific = $data;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
<<<<<<< HEAD
		$preValue = $this->preGetValue("BeautySpecific");
=======
		$preValue = $this->preGetValue("beautySpecific");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
<<<<<<< HEAD
* Set BeautySpecific - Beauty Specific
* @param \Pimcore\Model\DataObject\Objectbrick|null $BeautySpecific
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setBeautySpecific(?\Pimcore\Model\DataObject\Objectbrick $BeautySpecific)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("BeautySpecific");
	$this->BeautySpecific = $fd->preSetData($this, $BeautySpecific);
=======
* Set beautySpecific - Beauty Specific
* @param \Pimcore\Model\DataObject\Objectbrick|null $beautySpecific
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setBeautySpecific(?\Pimcore\Model\DataObject\Objectbrick $beautySpecific)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("beautySpecific");
	$this->beautySpecific = $fd->preSetData($this, $beautySpecific);
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
	return $this;
}

/**
* Get ProductImage - Product Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getProductImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ProductImage");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ProductImage;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ProductImage - Product Image
* @param \Pimcore\Model\Asset\Image|null $ProductImage
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setProductImage(?\Pimcore\Model\Asset\Image $ProductImage)
{
	$this->ProductImage = $ProductImage;

	return $this;
}

/**
* Get ProductColor - Product Color
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getProductColor(): ?\Pimcore\Model\DataObject\Data\RgbaColor
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ProductColor");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ProductColor;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ProductColor - Product Color
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $ProductColor
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setProductColor(?\Pimcore\Model\DataObject\Data\RgbaColor $ProductColor)
{
	$this->ProductColor = $ProductColor;

	return $this;
}

/**
* Get featuresSpecification - Features Specification
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getFeaturesSpecification(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("featuresSpecification");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("featuresSpecification")->preGetData($this);

	return $data;
}

/**
* Set featuresSpecification - Features Specification
* @param \Pimcore\Model\DataObject\Classificationstore|null $featuresSpecification
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setFeaturesSpecification(?\Pimcore\Model\DataObject\Classificationstore $featuresSpecification)
{
	$this->featuresSpecification = $featuresSpecification;

	return $this;
}

/**
* Get manufacturerDetails - Manufacturer Details
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getManufacturerDetails(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manufacturerDetails");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("manufacturerDetails")->preGetData($this);

	return $data;
}

/**
* Set manufacturerDetails - Manufacturer Details
* @param \Pimcore\Model\DataObject\Classificationstore|null $manufacturerDetails
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setManufacturerDetails(?\Pimcore\Model\DataObject\Classificationstore $manufacturerDetails)
{
	$this->manufacturerDetails = $manufacturerDetails;

	return $this;
}

/**
* Get sellerDetails - Seller Details
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getSellerDetails(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("sellerDetails");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("sellerDetails")->preGetData($this);

	return $data;
}

/**
* Set sellerDetails - Seller Details
* @param \Pimcore\Model\DataObject\Classificationstore|null $sellerDetails
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setSellerDetails(?\Pimcore\Model\DataObject\Classificationstore $sellerDetails)
{
	$this->sellerDetails = $sellerDetails;

	return $this;
}

/**
* Get ExtraAttributes - Extra Attributes
* @return \Pimcore\Model\DataObject\Data\BlockElement[][]
*/
public function getExtraAttributes(): ?array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ExtraAttributes");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("ExtraAttributes")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ExtraAttributes - Extra Attributes
* @param \Pimcore\Model\DataObject\Data\BlockElement[][] $ExtraAttributes
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setExtraAttributes(?array $ExtraAttributes)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Block $fd */
	$fd = $this->getClass()->getFieldDefinition("ExtraAttributes");
	$this->ExtraAttributes = $fd->preSetData($this, $ExtraAttributes);
	return $this;
}

}

