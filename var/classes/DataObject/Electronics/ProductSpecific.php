<?php

namespace Pimcore\Model\DataObject\Electronics;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class ProductSpecific extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['Mobile','Earphone','Laptop','SmarWatch'];


protected $Mobile = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Mobile|null
*/
public function getMobile(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Mobile) &&
		$this->Mobile->getDoDelete()) {
			return null;
	}
	return $this->Mobile;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Mobile $Mobile
* @return \Pimcore\Model\DataObject\Electronics\ProductSpecific
*/
public function setMobile($Mobile)
{
	$this->Mobile = $Mobile;
	return $this;
}

protected $Earphone = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Earphone|null
*/
public function getEarphone(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Earphone) &&
		$this->Earphone->getDoDelete()) {
			return null;
	}
	return $this->Earphone;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Earphone $Earphone
* @return \Pimcore\Model\DataObject\Electronics\ProductSpecific
*/
public function setEarphone($Earphone)
{
	$this->Earphone = $Earphone;
	return $this;
}

protected $Laptop = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Laptop|null
*/
public function getLaptop(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Laptop) &&
		$this->Laptop->getDoDelete()) {
			return null;
	}
	return $this->Laptop;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Laptop $Laptop
* @return \Pimcore\Model\DataObject\Electronics\ProductSpecific
*/
public function setLaptop($Laptop)
{
	$this->Laptop = $Laptop;
	return $this;
}

protected $SmarWatch = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SmarWatch|null
*/
public function getSmarWatch(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->SmarWatch) &&
		$this->SmarWatch->getDoDelete()) {
			return null;
	}
	return $this->SmarWatch;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\SmarWatch $SmarWatch
* @return \Pimcore\Model\DataObject\Electronics\ProductSpecific
*/
public function setSmarWatch($SmarWatch)
{
	$this->SmarWatch = $SmarWatch;
	return $this;
}

}

