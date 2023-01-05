<?php

/**
 * Fields Summary:
 * - remaining_details [input]
 * - reamainin_ans [input]
 */

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

class New extends DataObject\Fieldcollection\Data\AbstractData
{
protected $type = "new";
protected $remaining_details;
protected $reamainin_ans;


/**
* Get remaining_details - Remaining _details
* @return string|null
*/
public function getRemaining_details(): ?string
{
	$data = $this->remaining_details;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set remaining_details - Remaining _details
* @param string|null $remaining_details
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\New
*/
public function setRemaining_details(?string $remaining_details)
{
	$this->remaining_details = $remaining_details;

	return $this;
}

/**
* Get reamainin_ans - Reamainin _ans
* @return string|null
*/
public function getReamainin_ans(): ?string
{
	$data = $this->reamainin_ans;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set reamainin_ans - Reamainin _ans
* @param string|null $reamainin_ans
* @return \Pimcore\Model\DataObject\Fieldcollection\Data\New
*/
public function setReamainin_ans(?string $reamainin_ans)
{
	$this->reamainin_ans = $reamainin_ans;

	return $this;
}

}

