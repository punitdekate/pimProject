<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Electronics\Listing getList(array $config = [])
*/

class Electronics extends Concrete
{
protected $o_classId = "1";
protected $o_className = "Electronics";


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Electronics
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

}

