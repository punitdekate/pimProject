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
* @method static \Pimcore\Model\DataObject\CsvImport\Listing getList(array $config = [])
*/

class CsvImport extends Concrete
{
protected $o_classId = "5";
protected $o_className = "csvImport";


/**
* @param array $values
* @return \Pimcore\Model\DataObject\CsvImport
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

}

