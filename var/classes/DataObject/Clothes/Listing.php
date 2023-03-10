<?php

namespace Pimcore\Model\DataObject\Clothes;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Clothes|false current()
 * @method DataObject\Clothes[] load()
 * @method DataObject\Clothes[] getData()
 * @method DataObject\Clothes[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "clothes";
protected $className = "Clothes";


/**
* Filter by price (Price)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByPrice ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("price")->addListingFilter($this, $data, $operator);
	return $this;
}



}
