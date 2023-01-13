<?php

namespace Pimcore\Model\DataObject\Testing;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Testing|false current()
 * @method DataObject\Testing[] load()
 * @method DataObject\Testing[] getData()
 * @method DataObject\Testing[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "3";
protected $className = "testing";


/**
* Filter by name (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("name")->addListingFilter($this, $data, $operator);
	return $this;
}



}
