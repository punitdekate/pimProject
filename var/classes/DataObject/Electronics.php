<?php

/**
 * Inheritance: no
 * Variants: no
 * Contain information about clothing class and its attributes
 * 
 *
 * Fields Summary:
 * - productId [input]
<<<<<<< HEAD
 * - productName [input]
 * - description [textarea]
 * - price [numeric]
=======
 * - brandName [input]
 * - description [textarea]
 * - price [numeric]
 * - productType [select]
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
 * - productSpecific [objectbricks]
 * - ProductImage [image]
 * - ProductColor [rgbaColor]
 * - features [classificationstore]
<<<<<<< HEAD
 * - manufacturerDetails [classificationstore]
 * - sellerDetails [classificationstore]
=======
 * - manufacturingCompany [input]
 * - manufacturingDate [date]
 * - expiryDate [date]
 * - sellerDetails [manyToManyObjectRelation]
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
 * - ExtraAttributes [block]
 * -- AttributeName [input]
 * -- AttributeDetails [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Electronics\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByProductId($value, $limit = 0, $offset = 0, $objectTypes = null)
<<<<<<< HEAD
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByProductName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByProductImage($value, $limit = 0, $offset = 0, $objectTypes = null)
=======
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByBrandName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByProductType($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByProductImage($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByManufacturingCompany($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByManufacturingDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getByExpiryDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Electronics\Listing|\Pimcore\Model\DataObject\Electronics|null getBySellerDetails($value, $limit = 0, $offset = 0, $objectTypes = null)
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
*/

class Electronics extends Concrete
{
protected $o_classId = "electronics";
protected $o_className = "Electronics";
protected $productId;
<<<<<<< HEAD
protected $productName;
protected $description;
protected $price;
=======
protected $brandName;
protected $description;
protected $price;
protected $productType;
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
protected $productSpecific;
protected $ProductImage;
protected $ProductColor;
protected $features;
<<<<<<< HEAD
protected $manufacturerDetails;
=======
protected $manufacturingCompany;
protected $manufacturingDate;
protected $expiryDate;
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
protected $sellerDetails;
protected $ExtraAttributes;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Electronics
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
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setProductId(?string $productId)
{
	$this->productId = $productId;

	return $this;
}

/**
<<<<<<< HEAD
* Get productName - Product Name
* @return string|null
*/
public function getProductName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productName");
=======
* Get brandName - Brand
* @return string|null
*/
public function getBrandName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("brandName");
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->productName;
=======
	$data = $this->brandName;
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
<<<<<<< HEAD
* Set productName - Product Name
* @param string|null $productName
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setProductName(?string $productName)
{
	$this->productName = $productName;
=======
* Set brandName - Brand
* @param string|null $brandName
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setBrandName(?string $brandName)
{
	$this->brandName = $brandName;
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0

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
* @return \Pimcore\Model\DataObject\Electronics
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
* @return \Pimcore\Model\DataObject\Electronics
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
=======
* Get productType - Product Type
* @return string|null
*/
public function getProductType(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productType");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->productType;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set productType - Product Type
* @param string|null $productType
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setProductType(?string $productType)
{
	$this->productType = $productType;

	return $this;
}

/**
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
* @return \Pimcore\Model\DataObject\Electronics\ProductSpecific
*/
public function getProductSpecific(): ?\Pimcore\Model\DataObject\Objectbrick
{
	$data = $this->productSpecific;
	if (!$data) {
		if (\Pimcore\Tool::classExists("\\Pimcore\\Model\\DataObject\\Electronics\\ProductSpecific")) {
			$data = new \Pimcore\Model\DataObject\Electronics\ProductSpecific($this, "productSpecific");
			$this->productSpecific = $data;
		} else {
			return null;
		}
	}
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("productSpecific");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	return $data;
}

/**
* Set productSpecific - Product Specific
* @param \Pimcore\Model\DataObject\Objectbrick|null $productSpecific
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setProductSpecific(?\Pimcore\Model\DataObject\Objectbrick $productSpecific)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Objectbricks $fd */
	$fd = $this->getClass()->getFieldDefinition("productSpecific");
	$this->productSpecific = $fd->preSetData($this, $productSpecific);
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
* @return \Pimcore\Model\DataObject\Electronics
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
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setProductColor(?\Pimcore\Model\DataObject\Data\RgbaColor $ProductColor)
{
	$this->ProductColor = $ProductColor;

	return $this;
}

/**
* Get features - Features
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getFeatures(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("features");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("features")->preGetData($this);

	return $data;
}

/**
* Set features - Features
* @param \Pimcore\Model\DataObject\Classificationstore|null $features
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setFeatures(?\Pimcore\Model\DataObject\Classificationstore $features)
{
	$this->features = $features;

	return $this;
}

/**
<<<<<<< HEAD
* Get manufacturerDetails - Manufacturer Details
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getManufacturerDetails(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manufacturerDetails");
=======
* Get manufacturingCompany - Manufacturing Company
* @return string|null
*/
public function getManufacturingCompany(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manufacturingCompany");
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->getClass()->getFieldDefinition("manufacturerDetails")->preGetData($this);
=======
	$data = $this->manufacturingCompany;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0

	return $data;
}

/**
<<<<<<< HEAD
* Set manufacturerDetails - Manufacturer Details
* @param \Pimcore\Model\DataObject\Classificationstore|null $manufacturerDetails
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setManufacturerDetails(?\Pimcore\Model\DataObject\Classificationstore $manufacturerDetails)
{
	$this->manufacturerDetails = $manufacturerDetails;
=======
* Set manufacturingCompany - Manufacturing Company
* @param string|null $manufacturingCompany
* @return \Pimcore\Model\DataObject\Electronics
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
* @return \Pimcore\Model\DataObject\Electronics
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
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->expiryDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set expiryDate - Expiry Date
* @param \Carbon\Carbon|null $expiryDate
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setExpiryDate(?\Carbon\Carbon $expiryDate)
{
	$this->expiryDate = $expiryDate;
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0

	return $this;
}

/**
* Get sellerDetails - Seller Details
<<<<<<< HEAD
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getSellerDetails(): ?\Pimcore\Model\DataObject\Classificationstore
=======
* @return \Pimcore\Model\DataObject\Seller[]
*/
public function getSellerDetails(): array
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("sellerDetails");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("sellerDetails")->preGetData($this);

<<<<<<< HEAD
=======
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
	return $data;
}

/**
* Set sellerDetails - Seller Details
<<<<<<< HEAD
* @param \Pimcore\Model\DataObject\Classificationstore|null $sellerDetails
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setSellerDetails(?\Pimcore\Model\DataObject\Classificationstore $sellerDetails)
{
	$this->sellerDetails = $sellerDetails;

=======
* @param \Pimcore\Model\DataObject\Seller[] $sellerDetails
* @return \Pimcore\Model\DataObject\Electronics
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
>>>>>>> 256d15e6350525394dfdc17d6ff4023486afb9f0
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
* @return \Pimcore\Model\DataObject\Electronics
*/
public function setExtraAttributes(?array $ExtraAttributes)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Block $fd */
	$fd = $this->getClass()->getFieldDefinition("ExtraAttributes");
	$this->ExtraAttributes = $fd->preSetData($this, $ExtraAttributes);
	return $this;
}

}

