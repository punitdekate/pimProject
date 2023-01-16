<?php

namespace Pimcore\Model\DataObject\Feedback;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Feedback|false current()
 * @method DataObject\Feedback[] load()
 * @method DataObject\Feedback[] getData()
 * @method DataObject\Feedback[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "feedback";
protected $className = "feedback";


/**
* Filter by firstName (First Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByFirstName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("firstName")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by lastName (Last Name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByLastName ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("lastName")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by email (Email)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByEmail ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("email")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by feedback (Feedback)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterByFeedback ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("feedback")->addListingFilter($this, $data, $operator);
	return $this;
}



}
