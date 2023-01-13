<?php

namespace Pimcore\Model\DataObject\FeedbackForm;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\FeedbackForm|false current()
 * @method DataObject\FeedbackForm[] load()
 * @method DataObject\FeedbackForm[] getData()
 * @method DataObject\FeedbackForm[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "4";
protected $className = "FeedbackForm";


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
* Filter by suggestion (Suggestion)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return static
*/
public function filterBySuggestion ($data, $operator = '=')
{
	$this->getClass()->getFieldDefinition("suggestion")->addListingFilter($this, $data, $operator);
	return $this;
}



}
