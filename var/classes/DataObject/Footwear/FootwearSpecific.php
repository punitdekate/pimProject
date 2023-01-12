<?php

namespace Pimcore\Model\DataObject\Footwear;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;

class FootwearSpecific extends \Pimcore\Model\DataObject\Objectbrick {

protected $brickGetters = ['Footwear'];


protected $Footwear = null;

/**
* @return \Pimcore\Model\DataObject\Objectbrick\Data\Footwear|null
*/
public function getFootwear(bool $includeDeletedBricks = false)
{
	if(!$includeDeletedBricks &&
		isset($this->Footwear) &&
		$this->Footwear->getDoDelete()) {
			return null;
	}
	return $this->Footwear;
}

/**
* @param \Pimcore\Model\DataObject\Objectbrick\Data\Footwear $Footwear
* @return \Pimcore\Model\DataObject\Footwear\FootwearSpecific
*/
public function setFootwear($Footwear)
{
	$this->Footwear = $Footwear;
	return $this;
}

}

