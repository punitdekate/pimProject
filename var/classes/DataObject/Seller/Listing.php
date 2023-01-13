<?php

namespace Pimcore\Model\DataObject\Seller;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Seller|false current()
 * @method DataObject\Seller[] load()
 * @method DataObject\Seller[] getData()
 * @method DataObject\Seller[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "seller";
protected $className = "seller";


/**
* Filter by sellerId (Seller Id)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySellerId ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("sellerId")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by Name (Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("Name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by mobileNo (Mobile No)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByMobileNo ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("mobileNo")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by country (Country)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByCountry ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("country")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by product (Product)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByProduct ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("product")->addListingFilter($this, $data, $operator);
	return $this;
}



}
