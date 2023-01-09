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
<<<<<<< HEAD
* Filter by product_image (Product _image)
=======
* Filter by ProductImage (Product Image)
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
<<<<<<< HEAD
public function filterByProduct_image ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("product_image")->addListingFilter($this, $data, $operator);
=======
public function filterByProductImage ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("ProductImage")->addListingFilter($this, $data, $operator);
>>>>>>> 755474dfb48098f23d896c2a74c5eb309d7b8f7e
	return $this;
}



}
