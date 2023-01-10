<?php

namespace Pimcore\Model\DataObject\Beauty;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class BeautySpecific extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['Makeup','fragrances','HairCare','SkinCare'];


protected $Makeup = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Makeup|null
*/
public function getMakeup(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Makeup) &&
		$this->Makeup->getDoDelete()) {
			return null;
	}
	return $this->Makeup;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Makeup $Makeup
* @return \Pimcore\Model\DataObject\Beauty\BeautySpecific
*/
public function setMakeup($Makeup)
{
	$this->Makeup = $Makeup;
	return $this;
}

protected $fragrances = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Fragrances|null
*/
public function getFragrances(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->fragrances) &&
		$this->fragrances->getDoDelete()) {
			return null;
	}
	return $this->fragrances;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Fragrances $fragrances
* @return \Pimcore\Model\DataObject\Beauty\BeautySpecific
*/
public function setFragrances($fragrances)
{
	$this->fragrances = $fragrances;
	return $this;
}

protected $HairCare = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\HairCare|null
*/
public function getHairCare(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->HairCare) &&
		$this->HairCare->getDoDelete()) {
			return null;
	}
	return $this->HairCare;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\HairCare $HairCare
* @return \Pimcore\Model\DataObject\Beauty\BeautySpecific
*/
public function setHairCare($HairCare)
{
	$this->HairCare = $HairCare;
	return $this;
}

protected $SkinCare = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SkinCare|null
*/
public function getSkinCare(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->SkinCare) &&
		$this->SkinCare->getDoDelete()) {
			return null;
	}
	return $this->SkinCare;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\SkinCare $SkinCare
* @return \Pimcore\Model\DataObject\Beauty\BeautySpecific
*/
public function setSkinCare($SkinCare)
{
	$this->SkinCare = $SkinCare;
	return $this;
}

}

