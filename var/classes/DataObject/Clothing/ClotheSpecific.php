<?php

namespace Pimcore\Model\DataObject\Clothing;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class ClotheSpecific extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['TopWear','BottomWear','Ethnic'];


protected $TopWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\TopWear|null
*/
public function getTopWear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->TopWear) &&
		$this->TopWear->getDoDelete()) {
			return null;
	}
	return $this->TopWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\TopWear $TopWear
* @return \Pimcore\Model\DataObject\Clothing\ClotheSpecific
*/
public function setTopWear($TopWear)
{
	$this->TopWear = $TopWear;
	return $this;
}

protected $BottomWear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\BottomWear|null
*/
public function getBottomWear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->BottomWear) &&
		$this->BottomWear->getDoDelete()) {
			return null;
	}
	return $this->BottomWear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\BottomWear $BottomWear
* @return \Pimcore\Model\DataObject\Clothing\ClotheSpecific
*/
public function setBottomWear($BottomWear)
{
	$this->BottomWear = $BottomWear;
	return $this;
}

protected $Ethnic = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Ethnic|null
*/
public function getEthnic(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Ethnic) &&
		$this->Ethnic->getDoDelete()) {
			return null;
	}
	return $this->Ethnic;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Ethnic $Ethnic
* @return \Pimcore\Model\DataObject\Clothing\ClotheSpecific
*/
public function setEthnic($Ethnic)
{
	$this->Ethnic = $Ethnic;
	return $this;
}

}

