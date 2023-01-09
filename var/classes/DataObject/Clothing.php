<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - Name_Desc [classificationstore]
 * - Product_image [image]
 * - product_color [rgbaColor]
 * - product_details [classificationstore]
 * - Manufracture_Details [classificationstore]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothing\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Clothing\Listing|\Pimcore\Model\DataObject\Clothing|null getByProduct_image($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Clothing extends Concrete
{
protected $o_classId = "clothing";
protected $o_className = "clothing";
protected $Name_Desc;
protected $Product_image;
protected $product_color;
protected $product_details;
protected $Manufracture_Details;


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
* Get Name_Desc - Name  and   Description
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getName_Desc(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Name_Desc");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Name_Desc")->preGetData($this);

	return $data;
}

/**
* Set Name_Desc - Name  and   Description
* @param \Pimcore\Model\DataObject\Classificationstore|null $Name_Desc
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setName_Desc(?\Pimcore\Model\DataObject\Classificationstore $Name_Desc)
{
	$this->Name_Desc = $Name_Desc;

	return $this;
}

/**
* Get Product_image - Product _image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getProduct_image(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Product_image");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Product_image;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Product_image - Product _image
* @param \Pimcore\Model\Asset\Image|null $Product_image
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProduct_image(?\Pimcore\Model\Asset\Image $Product_image)
{
	$this->Product_image = $Product_image;

	return $this;
}

/**
* Get product_color - Product _color
* @return \Pimcore\Model\DataObject\Data\RgbaColor|null
*/
public function getProduct_color(): ?\Pimcore\Model\DataObject\Data\RgbaColor
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product_color");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->product_color;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set product_color - Product _color
* @param \Pimcore\Model\DataObject\Data\RgbaColor|null $product_color
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProduct_color(?\Pimcore\Model\DataObject\Data\RgbaColor $product_color)
{
	$this->product_color = $product_color;

	return $this;
}

/**
* Get product_details - Product _details
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getProduct_details(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product_details");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("product_details")->preGetData($this);

	return $data;
}

/**
* Set product_details - Product _details
* @param \Pimcore\Model\DataObject\Classificationstore|null $product_details
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProduct_details(?\Pimcore\Model\DataObject\Classificationstore $product_details)
{
	$this->product_details = $product_details;

	return $this;
}

/**
* Get Manufracture_Details - Manufracture  Details
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getManufracture_Details(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Manufracture_Details");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("Manufracture_Details")->preGetData($this);

	return $data;
}

/**
* Set Manufracture_Details - Manufracture  Details
* @param \Pimcore\Model\DataObject\Classificationstore|null $Manufracture_Details
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setManufracture_Details(?\Pimcore\Model\DataObject\Classificationstore $Manufracture_Details)
{
	$this->Manufracture_Details = $Manufracture_Details;

	return $this;
}

}

