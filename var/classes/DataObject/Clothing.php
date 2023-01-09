<?php

/**
 * Inheritance: no
 * Variants: no
<<<<<<< HEAD
 *
 * Fields Summary:
 * - genric_attributes [classificationstore]
 * - product_image [image]
 * - other_details [block]
 * -- attribute_name [input]
 * -- attribute_details [input]
 * - new_field [fieldcollections]
=======
 * Contain information about clothing class and its attributes
 * 
 *
 * Fields Summary:
 * - BaseAttributes [classificationstore]
 * - clotheSpecific [objectbricks]
 * - ProductImage [image]
 * - ProductColor [rgbaColor]
 * - featuresSpecification [classificationstore]
 * - manufacturerDetails [classificationstore]
 * - sellerDetails [classificationstore]
 * - ExtraAttributes [block]
 * -- AttributeName [input]
 * -- AttributeDetails [input]
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothing\Listing getList(array $config = [])
<<<<<<< HEAD
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProduct_image($value, $limit = 0, $offset = 0, $objectTypes = null)
=======
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProductImage($value, $limit = 0, $offset = 0, $objectTypes = null)
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
*/

class Clothing extends Concrete
{
protected $o_classId = "clothing";
protected $o_className = "clothing";
<<<<<<< HEAD
protected $genric_attributes;
protected $product_image;
protected $other_details;
protected $new_field;
=======
protected $BaseAttributes;
protected $clotheSpecific;
protected $ProductImage;
protected $ProductColor;
protected $featuresSpecification;
protected $manufacturerDetails;
protected $sellerDetails;
protected $ExtraAttributes;
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e


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
* Get genric_attributes - Genric Attributes
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getGenric_attributes(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("genric_attributes");
=======
* Get BaseAttributes - Base Attributes
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getBaseAttributes(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("BaseAttributes");
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->getClass()->getFieldDefinition("genric_attributes")->preGetData($this);
=======
	$data = $this->getClass()->getFieldDefinition("BaseAttributes")->preGetData($this);
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e

	return $data;
}

/**
<<<<<<< HEAD
* Set genric_attributes - Genric Attributes
* @param \Pimcore\Model\DataObject\Classificationstore|null $genric_attributes
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setGenric_attributes(?\Pimcore\Model\DataObject\Classificationstore $genric_attributes)
{
	$this->genric_attributes = $genric_attributes;
=======
* Set BaseAttributes - Base Attributes
* @param \Pimcore\Model\DataObject\Classificationstore|null $BaseAttributes
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setBaseAttributes(?\Pimcore\Model\DataObject\Classificationstore $BaseAttributes)
{
	$this->BaseAttributes = $BaseAttributes;
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e

	return $this;
}

/**
<<<<<<< HEAD
* Get product_image - Product _image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getProduct_image(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product_image");
=======
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
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->product_image;
=======
	$data = $this->ProductImage;
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
<<<<<<< HEAD
* Set product_image - Product _image
* @param \Pimcore\Model\Asset\Image|null $product_image
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProduct_image(?\Pimcore\Model\Asset\Image $product_image)
{
	$this->product_image = $product_image;
=======
* Set ProductImage - Product Image
* @param \Pimcore\Model\Asset\Image|null $ProductImage
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProductImage(?\Pimcore\Model\Asset\Image $ProductImage)
{
	$this->ProductImage = $ProductImage;
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e

	return $this;
}

/**
<<<<<<< HEAD
* Get other_details - Other _details
* @return \Pimcore\Model\DataObject\Data\BlockElement[][]
*/
public function getOther_details(): ?array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("other_details");
=======
* Get ProductColor - Product Color
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getProductColor(): ?\Pimcore\Model\DataObject\Data\RgbaColor
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ProductColor");
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->getClass()->getFieldDefinition("other_details")->preGetData($this);
=======
	$data = $this->ProductColor;
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
<<<<<<< HEAD
* Set other_details - Other _details
* @param \Pimcore\Model\DataObject\Data\BlockElement[][] $other_details
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setOther_details(?array $other_details)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Block $fd */
	$fd = $this->getClass()->getFieldDefinition("other_details");
	$this->other_details = $fd->preSetData($this, $other_details);
=======
* Set ProductColor - Product Color
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $ProductColor
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProductColor(?\Pimcore\Model\DataObject\Data\RgbaColor $ProductColor)
{
	$this->ProductColor = $ProductColor;

>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
	return $this;
}

/**
<<<<<<< HEAD
* @return \Pimcore\Model\DataObject\Fieldcollection|null
*/
public function getNew_field(): ?\Pimcore\Model\DataObject\Fieldcollection
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("new_field");
=======
* Get featuresSpecification - Features Specification
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getFeaturesSpecification(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("featuresSpecification");
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
		if ($preValue !== null) {
			return $preValue;
		}
	}

<<<<<<< HEAD
	$data = $this->getClass()->getFieldDefinition("new_field")->preGetData($this);
=======
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

>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
	return $data;
}

/**
<<<<<<< HEAD
* Set new_field - New _field
* @param \Pimcore\Model\DataObject\Fieldcollection|null $new_field
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setNew_field(?\Pimcore\Model\DataObject\Fieldcollection $new_field)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections $fd */
	$fd = $this->getClass()->getFieldDefinition("new_field");
	$this->new_field = $fd->preSetData($this, $new_field);
=======
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
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
	return $this;
}

}

