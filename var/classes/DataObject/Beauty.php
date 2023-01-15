<?php

/**
 * Inheritance: no
 * Variants: no
 * Contain information about clothing class and its attributes
 * 
 *
 * Fields Summary:
<<<<<<< HEAD
<<<<<<< HEAD
 * - BaseAttributes [classificationstore]
 * - BeautySpecific [objectbricks]
=======
 * - productId [input]
 * - pruductName [input]
 * - description [textarea]
 * - price [numeric]
 * - productFor [select]
 * - beautySpecific [objectbricks]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
 * - ProductImage [image]
 * - ProductColor [rgbaColor]
 * - featuresSpecification [classificationstore]
 * - manufacturingCompany [input]
 * - manufacturingDate [date]
 * - expiryDate [date]
 * - sellerDetails [manyToManyObjectRelation]
=======
 * - BaseAttributes [classificationstore]
 * - beautySpecific [objectbricks]
 * - ProductImage [image]
 * - ProductColor [rgbaColor]
 * - featuresSpecification [classificationstore]
 * - manufacturerDetails [classificationstore]
 * - sellerDetails [classificationstore]
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
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
<<<<<<< HEAD
=======
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByProductId($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByPruductName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByProductFor($value, $limit = 0, $offset = 0, $objectTypes = null)
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByProductImage($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByManufacturingCompany($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByManufacturingDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByExpiryDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getBySellerDetails($value, $limit = 0, $offset = 0, $objectTypes = null)
=======
* @method static \Pimcore\Model\DataObject\Beauty\Listing|\Pimcore\Model\DataObject\Beauty|null getByProductImage($value, $limit = 0, $offset = 0, $objectTypes = null)
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
*/

class Beauty extends Concrete
{
<<<<<<< HEAD
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
protected $productFor;
protected $beautySpecific;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
protected $ProductImage;
protected $ProductColor;
protected $featuresSpecification;
protected $manufacturingCompany;
protected $manufacturingDate;
protected $expiryDate;
=======
protected $o_classId = "beauty";
protected $o_className = "beauty";
protected $BaseAttributes;
protected $beautySpecific;
protected $ProductImage;
protected $ProductColor;
protected $featuresSpecification;
protected $manufacturerDetails;
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
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
<<<<<<< HEAD
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Get BaseAttributes - Base Attributes
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getBaseAttributes(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("BaseAttributes");
<<<<<<< HEAD
=======
* Get productId - Product Id
* @return string|null
*/
public function getProductId(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productId");
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
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
=======
	$data = $this->getClass()->getFieldDefinition("BaseAttributes")->preGetData($this);
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b

	return $data;
}

/**
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Set BaseAttributes - Base Attributes
* @param \Pimcore\Model\DataObject\Classificationstore|null $BaseAttributes
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setBaseAttributes(?\Pimcore\Model\DataObject\Classificationstore $BaseAttributes)
{
	$this->BaseAttributes = $BaseAttributes;
<<<<<<< HEAD
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
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
* Get productFor - Product For
* @return string|null
*/
public function getProductFor(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productFor");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->productFor;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set productFor - Product For
* @param string|null $productFor
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setProductFor(?string $productFor)
{
	$this->productFor = $productFor;
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b

	return $this;
}

/**
<<<<<<< HEAD
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* @return \Pimcore\Model\DataObject\Beauty\BeautySpecific
*/
public function getBeautySpecific(): ?\Pimcore\Model\DataObject\Objectbrick
{
<<<<<<< HEAD
<<<<<<< HEAD
	$data = $this->BeautySpecific;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\BeautySpecific")) {
			$data = new \Pimcore\Model\DataObject\Beauty\BeautySpecific($this, "BeautySpecific");
			$this->BeautySpecific = $data;
=======
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
	$data = $this->beautySpecific;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Beauty\\BeautySpecific")) {
			$data = new \Pimcore\Model\DataObject\Beauty\BeautySpecific($this, "beautySpecific");
			$this->beautySpecific = $data;
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
<<<<<<< HEAD
<<<<<<< HEAD
		$preValue = $this->preGetValue("BeautySpecific");
=======
		$preValue = $this->preGetValue("beautySpecific");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
		$preValue = $this->preGetValue("beautySpecific");
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
<<<<<<< HEAD
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
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
* Set beautySpecific - Beauty Specific
* @param \Pimcore\Model\DataObject\Objectbrick|null $beautySpecific
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setBeautySpecific(?\Pimcore\Model\DataObject\Objectbrick $beautySpecific)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("beautySpecific");
	$this->beautySpecific = $fd->preSetData($this, $beautySpecific);
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
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
<<<<<<< HEAD
* Get manufacturingCompany - Manufacturing Company
* @return string|null
*/
public function getManufacturingCompany(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manufacturingCompany");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->manufacturingCompany;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set manufacturingCompany - Manufacturing Company
* @param string|null $manufacturingCompany
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setManufacturingCompany(?string $manufacturingCompany)
{
	$this->manufacturingCompany = $manufacturingCompany;

	return $this;
}

/**
* Get manufacturingDate - Manufacturing Date
* @return \Carbon\Carbon|null
*/
public function getManufacturingDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manufacturingDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->manufacturingDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set manufacturingDate - Manufacturing Date
* @param \Carbon\Carbon|null $manufacturingDate
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setManufacturingDate(?\Carbon\Carbon $manufacturingDate)
{
	$this->manufacturingDate = $manufacturingDate;

	return $this;
}

/**
* Get expiryDate - Expiry Date
* @return \Carbon\Carbon|null
*/
public function getExpiryDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("expiryDate");
=======
* Get manufacturerDetails - Manufacturer Details
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getManufacturerDetails(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manufacturerDetails");
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->expiryDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
=======
	$data = $this->getClass()->getFieldDefinition("manufacturerDetails")->preGetData($this);
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b

	return $data;
}

/**
<<<<<<< HEAD
* Set expiryDate - Expiry Date
* @param \Carbon\Carbon|null $expiryDate
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setExpiryDate(?\Carbon\Carbon $expiryDate)
{
	$this->expiryDate = $expiryDate;
=======
* Set manufacturerDetails - Manufacturer Details
* @param \Pimcore\Model\DataObject\Classificationstore|null $manufacturerDetails
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setManufacturerDetails(?\Pimcore\Model\DataObject\Classificationstore $manufacturerDetails)
{
	$this->manufacturerDetails = $manufacturerDetails;
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b

	return $this;
}

/**
* Get sellerDetails - Seller Details
<<<<<<< HEAD
* @return \Pimcore\Model\DataObject\Seller[]
*/
public function getSellerDetails(): array
=======
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getSellerDetails(): ?\Pimcore\Model\DataObject\Classificationstore
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("sellerDetails");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("sellerDetails")->preGetData($this);

<<<<<<< HEAD
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

=======
>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
	return $data;
}

/**
* Set sellerDetails - Seller Details
<<<<<<< HEAD
* @param \Pimcore\Model\DataObject\Seller[] $sellerDetails
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setSellerDetails(?array $sellerDetails)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("sellerDetails");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getSellerDetails();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $sellerDetails);
	if (!$isEqual) {
		$this->markFieldDirty("sellerDetails", true);
	}
	$this->sellerDetails = $fd->preSetData($this, $sellerDetails);
=======
* @param \Pimcore\Model\DataObject\Classificationstore|null $sellerDetails
* @return \Pimcore\Model\DataObject\Beauty
*/
public function setSellerDetails(?\Pimcore\Model\DataObject\Classificationstore $sellerDetails)
{
	$this->sellerDetails = $sellerDetails;

>>>>>>> 68e50b2699b522c7fc2ae0ec4646593417116e7b
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

