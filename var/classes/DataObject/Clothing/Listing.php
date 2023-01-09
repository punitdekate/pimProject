<?php

namespace Pimcore\Model\DataObject\Clothing;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Clothing|false current()
 * @method DataObject\Clothing[] load()
 * @method DataObject\Clothing[] getData()
 * @method DataObject\Clothing[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "clothing";
protected $className = "clothing";


/**
* Filter by Product_image (Product _image)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProduct_image ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Product_image")->addListingFilter($this, $data, $operator);
	return $this;
}



}
