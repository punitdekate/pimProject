<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - name [input]
 * - email [email]
 * - suggestion [wysiwyg]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\FeedbackForm\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\FeedbackForm\Listing|\Pimcore\Model\DataObject\FeedbackForm|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\FeedbackForm\Listing|\Pimcore\Model\DataObject\FeedbackForm|null getByEmail($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\FeedbackForm\Listing|\Pimcore\Model\DataObject\FeedbackForm|null getBySuggestion($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class FeedbackForm extends Concrete
{
protected $o_classId = "4";
protected $o_className = "FeedbackForm";
protected $name;
protected $email;
protected $suggestion;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\FeedbackForm
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return \Pimcore\Model\DataObject\FeedbackForm
*/
public function setName(?string $name)
{
	$this->name = $name;

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
* @return \Pimcore\Model\DataObject\FeedbackForm
*/
public function setEmail(?string $email)
{
	$this->email = $email;

	return $this;
}

/**
* Get suggestion - Suggestion
* @return string|null
*/
public function getSuggestion(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("suggestion");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("suggestion")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set suggestion - Suggestion
* @param string|null $suggestion
* @return \Pimcore\Model\DataObject\FeedbackForm
*/
public function setSuggestion(?string $suggestion)
{
	$this->suggestion = $suggestion;

	return $this;
}

}

