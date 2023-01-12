<?php

/**
 * Inheritance: no
 * Variants: no
<<<<<<< HEAD
 *
 * Fields Summary:
 * - Name_Desc [classificationstore]
 * - Product_image [image]
 * - product_color [rgbaColor]
 * - product_details [classificationstore]
 * - Manufracture_Details [classificationstore]
=======
 * Contain information about clothing class and its attributes
 * 
 *
 * Fields Summary:
 * - productId [input]
 * - productName [input]
 * - description [textarea]
 * - price [numeric]
 * - clotheSpecific [objectbricks]
 * - gender [select]
 * - ProductImage [image]
 * - ProductColor [rgbaColor]
 * - featuresSpecification [classificationstore]
 * - manufacturingCompany [input]
 * - manufacturingDate [date]
 * - expiryDate [date]
 * - sellerDetails [manyToManyObjectRelation]
 * - ExtraAttributes [block]
 * -- AttributeName [input]
 * -- AttributeDetails [input]
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothing\Listing getList(array $config = [])
<<<<<<< HEAD
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProduct_image($value, $limit = 0, $offset = 0, $objectTypes = null)
=======
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProductId($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProductName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByDescription($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByGender($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProductImage($value, $limit = 0, $offset = 0, $objectTypes = null)
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByManufacturingCompany($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByManufacturingDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByExpiryDate($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getBySellerDetails($value, $limit = 0, $offset = 0, $objectTypes = null)
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb
*/

class Clothing extends Concrete
{
protected $o_classId = "clothing";
protected $o_className = "clothing";
<<<<<<< HEAD
protected $Name_Desc;
protected $Product_image;
protected $product_color;
protected $product_details;
protected $Manufracture_Details;
=======
protected $productId;
protected $productName;
protected $description;
protected $price;
protected $clotheSpecific;
protected $gender;
protected $ProductImage;
protected $ProductColor;
protected $featuresSpecification;
protected $manufacturingCompany;
protected $manufacturingDate;
protected $expiryDate;
protected $sellerDetails;
protected $ExtraAttributes;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c


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
<<<<<<< HEAD
* Get Name_Desc - Name  and   Description
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getName_Desc(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Name_Desc");
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
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->getClass()->getFieldDefinition("Name_Desc")->preGetData($this);
=======
	$data = $this->price;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $data;
}

/**
<<<<<<< HEAD
* Set Name_Desc - Name  and   Description
* @param \Pimcore\Model\DataObject\Classificationstore|null $Name_Desc
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setName_Desc(?\Pimcore\Model\DataObject\Classificationstore $Name_Desc)
{
	$this->Name_Desc = $Name_Desc;

=======
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
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
	return $this;
}

/**
<<<<<<< HEAD
<<<<<<< HEAD
* Get Product_image - Product _image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getProduct_image(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Product_image");
=======
=======
* Get gender - Gender
* @return string|null
*/
public function getGender(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("gender");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->gender;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set gender - Gender
* @param string|null $gender
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setGender(?string $gender)
{
	$this->gender = $gender;

	return $this;
}

/**
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb
* Get ProductImage - Product Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getProductImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ProductImage");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->Product_image;
=======
	$data = $this->ProductImage;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
<<<<<<< HEAD
* Set Product_image - Product _image
* @param \Pimcore\Model\Asset\Image|null $Product_image
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProduct_image(?\Pimcore\Model\Asset\Image $Product_image)
{
	$this->Product_image = $Product_image;
=======
* Set ProductImage - Product Image
* @param \Pimcore\Model\Asset\Image|null $ProductImage
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProductImage(?\Pimcore\Model\Asset\Image $ProductImage)
{
	$this->ProductImage = $ProductImage;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $this;
}

/**
<<<<<<< HEAD
* Get product_color - Product _color
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getProduct_color(): ?\Pimcore\Model\DataObject\Data\RgbaColor
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product_color");
=======
* Get ProductColor - Product Color
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getProductColor(): ?\Pimcore\Model\DataObject\Data\RgbaColor
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ProductColor");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->product_color;
=======
	$data = $this->ProductColor;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
<<<<<<< HEAD
* Set product_color - Product _color
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $product_color
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProduct_color(?\Pimcore\Model\DataObject\Data\RgbaColor $product_color)
{
	$this->product_color = $product_color;
=======
* Set ProductColor - Product Color
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $ProductColor
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProductColor(?\Pimcore\Model\DataObject\Data\RgbaColor $ProductColor)
{
	$this->ProductColor = $ProductColor;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $this;
}

/**
<<<<<<< HEAD
* Get product_details - Product _details
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getProduct_details(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product_details");
=======
* Get featuresSpecification - Features Specification
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getFeaturesSpecification(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("featuresSpecification");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->getClass()->getFieldDefinition("product_details")->preGetData($this);
=======
	$data = $this->getClass()->getFieldDefinition("featuresSpecification")->preGetData($this);
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $data;
}

/**
<<<<<<< HEAD
* Set product_details - Product _details
* @param \Pimcore\Model\DataObject\Classificationstore|null $product_details
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProduct_details(?\Pimcore\Model\DataObject\Classificationstore $product_details)
{
	$this->product_details = $product_details;
=======
* Set featuresSpecification - Features Specification
* @param \Pimcore\Model\DataObject\Classificationstore|null $featuresSpecification
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setFeaturesSpecification(?\Pimcore\Model\DataObject\Classificationstore $featuresSpecification)
{
	$this->featuresSpecification = $featuresSpecification;
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c

	return $this;
}

/**
<<<<<<< HEAD
<<<<<<< HEAD
* Get Manufracture_Details - Manufracture  Details
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getManufracture_Details(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Manufracture_Details");
=======
* Get manufacturerDetails - Manufacturer Details
* @return \Pimcore\Model\DataObject\Classificationstore|null
=======
* Get manufacturingCompany - Manufacturing Company
* @return string|null
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb
*/
public function getManufacturingCompany(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
<<<<<<< HEAD
		$preValue = $this->preGetValue("manufacturerDetails");
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
		$preValue = $this->preGetValue("manufacturingCompany");
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
<<<<<<< HEAD
	$data = $this->getClass()->getFieldDefinition("Manufracture_Details")->preGetData($this);
=======
	$data = $this->getClass()->getFieldDefinition("manufacturerDetails")->preGetData($this);
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
	$data = $this->manufacturingCompany;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb

	return $data;
}

/**
<<<<<<< HEAD
<<<<<<< HEAD
* Set Manufracture_Details - Manufracture  Details
* @param \Pimcore\Model\DataObject\Classificationstore|null $Manufracture_Details
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setManufracture_Details(?\Pimcore\Model\DataObject\Classificationstore $Manufracture_Details)
{
	$this->Manufracture_Details = $Manufracture_Details;

=======
* Set manufacturerDetails - Manufacturer Details
* @param \Pimcore\Model\DataObject\Classificationstore|null $manufacturerDetails
=======
* Set manufacturingCompany - Manufacturing Company
* @param string|null $manufacturingCompany
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb
* @return \Pimcore\Model\DataObject\Clothing
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
* @return \Pimcore\Model\DataObject\Clothing
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
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setExpiryDate(?\Carbon\Carbon $expiryDate)
{
	$this->expiryDate = $expiryDate;

	return $this;
}

/**
* Get sellerDetails - Seller Details
* @return \Pimcore\Model\DataObject\Seller[]
*/
public function getSellerDetails(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("sellerDetails");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("sellerDetails")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set sellerDetails - Seller Details
* @param \Pimcore\Model\DataObject\Seller[] $sellerDetails
* @return \Pimcore\Model\DataObject\Clothing
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
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
	return $this;
}

}

