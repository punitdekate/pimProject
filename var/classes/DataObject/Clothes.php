<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - price [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothes\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Clothes\Listing|\Pimcore\Model\DataObject\Clothes|null getByPrice($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Clothes extends Concrete
{
protected $o_classId = "clothes";
protected $o_className = "Clothes";
protected $price;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Clothes
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get price - Price
* @return string|null
*/
public function getPrice(): ?string
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
* @param string|null $price
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setPrice(?string $price)
{
	$this->price = $price;

	return $this;
}

}

