<?php

namespace Voximplant\Interfaces;

interface RecordStoragesInterface
{
    /**
     * @method Gets the record storages.
     */
    public function GetRecordStorages(\Voximplant\Resources\Params\GetRecordStoragesParams $params);

    /**
     * @method Gets the custom record storages.
     */
    public function GetCustomRecordStorages(\Voximplant\Resources\Params\GetCustomRecordStoragesParams $params);

    /**
     * @method Adds a custom record storage.
     */
    public function AddCustomRecordStorage(\Voximplant\Resources\Params\AddCustomRecordStorageParams $params);

    /**
     * @method Modifies the custom record storage.
     */
    public function SetCustomRecordStorageInfo(\Voximplant\Resources\Params\SetCustomRecordStorageInfoParams $params);
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
class GetCustomRecordStoragesReturn
{
    /** @var CustomRecordStorageInfoType */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class AddCustomRecordStorageReturn
{
    /** @var AddCustomRecordStorageInfoType */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetCustomRecordStorageInfoReturn
{
    /** @var number */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
