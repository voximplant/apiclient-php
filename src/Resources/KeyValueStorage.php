<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\DelKeyValueItemReturn;
use Voximplant\Interfaces\GetKeyValueItemReturn;
use Voximplant\Interfaces\GetKeyValueItemsReturn;
use Voximplant\Interfaces\GetKeyValueKeysReturn;
use Voximplant\Interfaces\KeyValueStorageInterface;
use Voximplant\Interfaces\SetKeyValueItemReturn;

class KeyValueStorage implements KeyValueStorageInterface
{
    protected $client;

    /** @object SetKeyValueItem */
    protected $SetKeyValueItemReturn;

    /** @object DelKeyValueItem */
    protected $DelKeyValueItemReturn;

    /** @object GetKeyValueItem */
    protected $GetKeyValueItemReturn;

    /** @object GetKeyValueItems */
    protected $GetKeyValueItemsReturn;

    /** @object GetKeyValueKeys */
    protected $GetKeyValueKeysReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->SetKeyValueItemReturn = new SetKeyValueItemReturn();
        $this->DelKeyValueItemReturn = new DelKeyValueItemReturn();
        $this->GetKeyValueItemReturn = new GetKeyValueItemReturn();
        $this->GetKeyValueItemsReturn = new GetKeyValueItemsReturn();
        $this->GetKeyValueKeysReturn = new GetKeyValueKeysReturn();
    }

    /**
     * @method Creates or updates a key-value pair. If an existing key is passed, the method returns the existing item and changes the value if needed. The keys should be unique within a Voximplant application.
     */
    public function SetKeyValueItem(Params\SetKeyValueItemParams $params = null): SetKeyValueItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetKeyValueItemReturn->$key = $value;
        }
        return $this->SetKeyValueItemReturn;
    }

    /**
     * @method Deletes the specified key-value pair from the storage.
     */
    public function DelKeyValueItem(Params\DelKeyValueItemParams $params = null): DelKeyValueItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelKeyValueItemReturn->$key = $value;
        }
        return $this->DelKeyValueItemReturn;
    }

    /**
     * @method Gets the specified key-value pair from the storage.
     */
    public function GetKeyValueItem(Params\GetKeyValueItemParams $params = null): GetKeyValueItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetKeyValueItemReturn->$key = $value;
        }
        return $this->GetKeyValueItemReturn;
    }

    /**
     * @method Gets all the key-value pairs in which the keys begin with a pattern.
     */
    public function GetKeyValueItems(Params\GetKeyValueItemsParams $params = null): GetKeyValueItemsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetKeyValueItemsReturn->$key = $value;
        }
        return $this->GetKeyValueItemsReturn;
    }

    /**
     * @method Gets all the keys of key-value pairs.
     */
    public function GetKeyValueKeys(Params\GetKeyValueKeysParams $params = null): GetKeyValueKeysReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetKeyValueKeysReturn->$key = $value;
        }
        return $this->GetKeyValueKeysReturn;
    }
}
