<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - genric_attributes [classificationstore]
 * - product_image [image]
 * - other_details [block]
 * -- attribute_name [input]
 * -- attribute_details [input]
 * - new_field [fieldcollections]
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
protected $genric_attributes;
protected $product_image;
protected $other_details;
protected $new_field;


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
* Get genric_attributes - Genric Attributes
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getGenric_attributes(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("genric_attributes");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("genric_attributes")->preGetData($this);

	return $data;
}

/**
* Set genric_attributes - Genric Attributes
* @param \Pimcore\Model\DataObject\Classificationstore|null $genric_attributes
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setGenric_attributes(?\Pimcore\Model\DataObject\Classificationstore $genric_attributes)
{
	$this->genric_attributes = $genric_attributes;

	return $this;
}

/**
* Get product_image - Product _image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getProduct_image(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product_image");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->product_image;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set product_image - Product _image
* @param \Pimcore\Model\Asset\Image|null $product_image
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setProduct_image(?\Pimcore\Model\Asset\Image $product_image)
{
	$this->product_image = $product_image;

	return $this;
}

/**
* Get other_details - Other _details
* @return \Pimcore\Model\DataObject\Data\BlockElement[][]
*/
public function getOther_details(): ?array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("other_details");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("other_details")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set other_details - Other _details
* @param \Pimcore\Model\DataObject\Data\BlockElement[][] $other_details
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setOther_details(?array $other_details)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Block $fd */
	$fd = $this->getClass()->getFieldDefinition("other_details");
	$this->other_details = $fd->preSetData($this, $other_details);
	return $this;
}

/**
* @return \Pimcore\Model\DataObject\Fieldcollection|null
*/
public function getNew_field(): ?\Pimcore\Model\DataObject\Fieldcollection
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("new_field");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("new_field")->preGetData($this);
	return $data;
}

/**
* Set new_field - New _field
* @param \Pimcore\Model\DataObject\Fieldcollection|null $new_field
* @return \Pimcore\Model\DataObject\Clothing
*/
public function setNew_field(?\Pimcore\Model\DataObject\Fieldcollection $new_field)
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Fieldcollections $fd */
	$fd = $this->getClass()->getFieldDefinition("new_field");
	$this->new_field = $fd->preSetData($this, $new_field);
	return $this;
}

}

