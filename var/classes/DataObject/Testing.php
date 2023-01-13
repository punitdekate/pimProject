<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - name [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Testing\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Testing\Listing|\Pimcore\Model\DataObject\Testing|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Testing extends Concrete
{
protected $o_classId = "3";
protected $o_className = "testing";
protected $name;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Testing
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return \Pimcore\Model\DataObject\Testing
*/
public function setName(?string $name)
{
	$this->name = $name;

	return $this;
}

}

