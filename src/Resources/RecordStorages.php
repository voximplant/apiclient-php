<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddCustomRecordStorageReturn;
use Voximplant\Interfaces\GetCustomRecordStoragesReturn;
use Voximplant\Interfaces\GetRecordStoragesReturn;
use Voximplant\Interfaces\RecordStoragesInterface;
use Voximplant\Interfaces\SetCustomRecordStorageInfoReturn;

class RecordStorages implements RecordStoragesInterface
{
    protected $client;

    /** @object GetRecordStorages */
    protected $GetRecordStoragesReturn;

    /** @object GetCustomRecordStorages */
    protected $GetCustomRecordStoragesReturn;

    /** @object AddCustomRecordStorage */
    protected $AddCustomRecordStorageReturn;

    /** @object SetCustomRecordStorageInfo */
    protected $SetCustomRecordStorageInfoReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->GetRecordStoragesReturn = new GetRecordStoragesReturn();
        $this->GetCustomRecordStoragesReturn = new GetCustomRecordStoragesReturn();
        $this->AddCustomRecordStorageReturn = new AddCustomRecordStorageReturn();
        $this->SetCustomRecordStorageInfoReturn = new SetCustomRecordStorageInfoReturn();
    }

    /**
     * @method Gets the record storages.
     */
    public function GetRecordStorages(Params\GetRecordStoragesParams $params = null): GetRecordStoragesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetRecordStoragesReturn->$key = $value;
        }
        return $this->GetRecordStoragesReturn;
    }

    /**
     * @method Gets the custom record storages.
     */
    public function GetCustomRecordStorages(Params\GetCustomRecordStoragesParams $params = null): GetCustomRecordStoragesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCustomRecordStoragesReturn->$key = $value;
        }
        return $this->GetCustomRecordStoragesReturn;
    }

    /**
     * @method Adds a custom record storage.
     */
    public function AddCustomRecordStorage(Params\AddCustomRecordStorageParams $params = null): AddCustomRecordStorageReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddCustomRecordStorageReturn->$key = $value;
        }
        return $this->AddCustomRecordStorageReturn;
    }

    /**
     * @method Modifies the custom record storage.
     */
    public function SetCustomRecordStorageInfo(Params\SetCustomRecordStorageInfoParams $params = null): SetCustomRecordStorageInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetCustomRecordStorageInfoReturn->$key = $value;
        }
        return $this->SetCustomRecordStorageInfoReturn;
    }
}
