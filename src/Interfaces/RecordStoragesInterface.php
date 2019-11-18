<?php

namespace Voximplant\Interfaces;

interface RecordStoragesInterface
{
    /**
     * @method Get the record storages.
     */
    public function GetRecordStorages(\Voximplant\Resources\Params\GetRecordStoragesParams $params);
}
class GetRecordStoragesReturn
{
	/** @var RecordStorageInfoType */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
