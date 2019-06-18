<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\GetRecordStoragesReturn;
use Voximplant\Interfaces\RecordStoragesInterface;

class RecordStorages implements RecordStoragesInterface
{
	protected $client;

	/** @object GetRecordStorages */
	protected $GetRecordStoragesReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->GetRecordStoragesReturn = new GetRecordStoragesReturn();
	}


	/**
	 * @method Get the record storages.
	 */
	public function GetRecordStorages(Params\GetRecordStoragesParams $params = null): GetRecordStoragesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetRecordStoragesReturn->$key = $value;
		}
		return $this->GetRecordStoragesReturn;
	}
}
