<?php

/**
 * Inheritance: no
 * Variants: no
 * Contain information about clothing class and its attributes
 * 
 *
 * Fields Summary:
 * - productId [input]
 * - productName [input]
 * - description [textarea]
 * - price [numeric]
 * - clotheSpecific [objectbricks]
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
* @method static \Pimcore\Model\DataObject\Clothing\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProductId($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProductName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProductImage($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Clothing extends Concrete
{
protected $o_classId = "clothing";
protected $o_className = "clothing";
protected $productId;
protected $productName;
protected $description;
protected $price;
protected $clotheSpecific;
protected $ProductImage;
protected $ProductColor;
protected $featuresSpecification;
protected $manufacturerDetails;
protected $sellerDetails;
protected $ExtraAttributes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Clothing
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
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
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProductId(?string $productId)
{
	$this->productId = $productId;

	return $this;
}

/**
* Get productName - Product Name
* @return string|null
*/
public function getProductName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productName");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->productName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set productName - Product Name
* @param string|null $productName
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProductName(?string $productName)
{
	$this->productName = $productName;

	return $this;
}

/**
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
* @return \Pimcore\Model\DataObject\Clothing
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
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setPrice(?float $price)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Clothing\ClotheSpecific
*/
public function getClotheSpecific(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->clotheSpecific;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Clothing\\ClotheSpecific")) {
			$data = new \Pimcore\Model\DataObject\Clothing\ClotheSpecific($this, "clotheSpecific");
			$this->clotheSpecific = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("clotheSpecific");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set clotheSpecific - Clothe Specific
* @param \Pimcore\Model\DataObject\Objectbrick|null $clotheSpecific
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setClotheSpecific(?\Pimcore\Model\DataObject\Objectbrick $clotheSpecific)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("clotheSpecific");
	$this->clotheSpecific = $fd->preSetData($this, $clotheSpecific);
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
* @return \Pimcore\Model\DataObject\Clothing
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
* @return \Pimcore\Model\DataObject\Clothing
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
* @return \Pimcore\Model\DataObject\Clothing
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
* @return \Pimcore\Model\DataObject\Clothing
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
* @return \Pimcore\Model\DataObject\Clothing
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
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setExtraAttributes(?array $ExtraAttributes)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Block $fd */
	$fd = $this->getClass()->getFieldDefinition("ExtraAttributes");
	$this->ExtraAttributes = $fd->preSetData($this, $ExtraAttributes);
	return $this;
}

}

