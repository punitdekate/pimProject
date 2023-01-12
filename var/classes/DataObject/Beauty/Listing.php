<?php

namespace Pimcore\Model\DataObject\Beauty;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Beauty|false current()
 * @method DataObject\Beauty[] load()
 * @method DataObject\Beauty[] getData()
 * @method DataObject\Beauty[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
<<<<<<< HEAD
protected $classId = "1";
=======
protected $classId = "beauty";
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
protected $className = "beauty";


/**
<<<<<<< HEAD
=======
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
* Filter by pruductName (Pruduct Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByPruductName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("pruductName")->addListingFilter($this, $data, $operator);
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
<<<<<<< HEAD
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
=======
* Filter by productFor (Product For)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProductFor ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("productFor")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
>>>>>>> fc13ccf3beabb5cf76d7eda91d10b62586ddb0cb
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

/**
* Filter by manufacturingCompany (Manufacturing Company)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByManufacturingCompany ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("manufacturingCompany")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by manufacturingDate (Manufacturing Date)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByManufacturingDate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("manufacturingDate")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by expiryDate (Expiry Date)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByExpiryDate ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("expiryDate")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by sellerDetails (Seller Details)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySellerDetails ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("sellerDetails")->addListingFilter($this, $data, $operator);
	return $this;
}



}
