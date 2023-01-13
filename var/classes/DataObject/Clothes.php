<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - props [classificationstore]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Clothes\Listing getList(array $config = [])
*/

class Clothes extends Concrete
{
protected $o_classId = "clothes";
protected $o_className = "Clothes";
protected $props;


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
* Get props - Props
* @return \Pimcore\Model\DataObject\Classificationstore|null
*/
public function getProps(): ?\Pimcore\Model\DataObject\Classificationstore
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("props");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("props")->preGetData($this);

	return $data;
}

/**
* Set props - Props
* @param \Pimcore\Model\DataObject\Classificationstore|null $props
* @return \Pimcore\Model\DataObject\Clothes
*/
public function setProps(?\Pimcore\Model\DataObject\Classificationstore $props)
{
	$this->props = $props;

	return $this;
}

}

