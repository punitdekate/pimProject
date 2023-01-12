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
* Filter by Product_image (Product _image)
=======
* Filter by productId (Product Id)
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
<<<<<<< HEAD
public function filterByProduct_image ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Product_image")->addListingFilter($this, $data, $operator);
=======
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
* Filter by gender (Gender)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByGender ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("gender")->addListingFilter($this, $data, $operator);
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
>>>>>>> b1ee972dbad14536cd41c6e7ffe1a381d49f2c4c
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
