<?php

/**
 * Inheritance: no
 * Variants: no
 * Contains the feedback of the user.
 *
 * Fields Summary:
 * - firstName [input]
 * - lastName [input]
 * - email [input]
 * - feedback [textarea]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Feedback\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByFirstName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByLastName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByEmail($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Feedback\Listing|\Pimcore\Model\DataObject\Feedback|null getByFeedback($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Feedback extends Concrete
{
protected $o_classId = "feedback";
protected $o_className = "feedback";
protected $firstName;
protected $lastName;
protected $email;
protected $feedback;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Feedback
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get firstName - First Name
* @return string|null
*/
public function getFirstName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("firstName");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->firstName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set firstName - First Name
* @param string|null $firstName
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setFirstName(?string $firstName)
{
	$this->firstName = $firstName;

	return $this;
}

/**
* Get lastName - Last Name
* @return string|null
*/
public function getLastName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("lastName");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->lastName;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set lastName - Last Name
* @param string|null $lastName
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setLastName(?string $lastName)
{
	$this->lastName = $lastName;

	return $this;
}

/**
* Get email - Email
* @return string|null
*/
public function getEmail(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("email");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->email;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set email - Email
* @param string|null $email
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setEmail(?string $email)
{
	$this->email = $email;

	return $this;
}

/**
* Get feedback - Feedback
* @return string|null
*/
public function getFeedback(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("feedback");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->feedback;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set feedback - Feedback
* @param string|null $feedback
* @return \Pimcore\Model\DataObject\Feedback
*/
public function setFeedback(?string $feedback)
{
	$this->feedback = $feedback;

	return $this;
}

}

