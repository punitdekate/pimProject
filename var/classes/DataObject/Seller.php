<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - sellerId [input]
 * - Name [input]
 * - mobileNo [input]
 * - country [country]
 * - product [select]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Seller\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Seller\Listing|\Pimcore\Model\DataObject\Seller|null getBySellerId($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Seller\Listing|\Pimcore\Model\DataObject\Seller|null getByName($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Seller\Listing|\Pimcore\Model\DataObject\Seller|null getByMobileNo($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Seller\Listing|\Pimcore\Model\DataObject\Seller|null getByCountry($value, $limit = 0, $offset = 0, $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Seller\Listing|\Pimcore\Model\DataObject\Seller|null getByProduct($value, $limit = 0, $offset = 0, $objectTypes = null)
*/

class Seller extends Concrete
{
protected $o_classId = "seller";
protected $o_className = "seller";
protected $sellerId;
protected $Name;
protected $mobileNo;
protected $country;
protected $product;


/**
* @param array $values
* @return \Pimcore\Model\DataObject\Seller
*/
public static function create($values = array()) {
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get sellerId - Seller Id
* @return string|null
*/
public function getSellerId(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("sellerId");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->sellerId;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set sellerId - Seller Id
* @param string|null $sellerId
* @return \Pimcore\Model\DataObject\Seller
*/
public function setSellerId(?string $sellerId)
{
	$this->sellerId = $sellerId;

	return $this;
}

/**
* Get Name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("Name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->Name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set Name - Name
* @param string|null $Name
* @return \Pimcore\Model\DataObject\Seller
*/
public function setName(?string $Name)
{
	$this->Name = $Name;

	return $this;
}

/**
* Get mobileNo - Mobile No
* @return string|null
*/
public function getMobileNo(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("mobileNo");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->mobileNo;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set mobileNo - Mobile No
* @param string|null $mobileNo
* @return \Pimcore\Model\DataObject\Seller
*/
public function setMobileNo(?string $mobileNo)
{
	$this->mobileNo = $mobileNo;

	return $this;
}

/**
* Get country - Country
* @return string|null
*/
public function getCountry(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("country");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->country;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set country - Country
* @param string|null $country
* @return \Pimcore\Model\DataObject\Seller
*/
public function setCountry(?string $country)
{
	$this->country = $country;

	return $this;
}

/**
* Get product - Product
* @return string|null
*/
public function getProduct(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("product");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->product;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set product - Product
* @param string|null $product
* @return \Pimcore\Model\DataObject\Seller
*/
public function setProduct(?string $product)
{
	$this->product = $product;

	return $this;
}

}

