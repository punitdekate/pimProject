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
* Filter by productId (Product Id)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductId ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("productId")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by productName (Product Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("productName")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by description (Description)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByDescription ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("description")->addListingFilter($this, $data, $operator);
	return $this;
}

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
