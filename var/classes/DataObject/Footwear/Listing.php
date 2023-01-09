<?php

namespace Pimcore\Model\DataObject\Footwear;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Footwear|false current()
 * @method DataObject\Footwear[] load()
 * @method DataObject\Footwear[] getData()
 * @method DataObject\Footwear[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "footwear";
protected $className = "footwear";


/**
* Filter by ProductImage (Product Image)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductImage ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ProductImage")->addListingFilter($this, $data, $operator);
	return $this;
}



}
