<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddSipWhiteListItemReturn;
use Voximplant\Interfaces\DelSipWhiteListItemReturn;
use Voximplant\Interfaces\GetSipWhiteListReturn;
use Voximplant\Interfaces\SIPWhiteListInterface;
use Voximplant\Interfaces\SetSipWhiteListItemReturn;

class SIPWhiteList implements SIPWhiteListInterface
{
    protected $client;

    /** @object AddSipWhiteListItem */
    protected $AddSipWhiteListItemReturn;

    /** @object DelSipWhiteListItem */
    protected $DelSipWhiteListItemReturn;

    /** @object SetSipWhiteListItem */
    protected $SetSipWhiteListItemReturn;

    /** @object GetSipWhiteList */
    protected $GetSipWhiteListReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddSipWhiteListItemReturn = new AddSipWhiteListItemReturn();
        $this->DelSipWhiteListItemReturn = new DelSipWhiteListItemReturn();
        $this->SetSipWhiteListItemReturn = new SetSipWhiteListItemReturn();
        $this->GetSipWhiteListReturn = new GetSipWhiteListReturn();
    }

    /**
     * @method Adds a new network address to the SIP white list.
     */
    public function AddSipWhiteListItem(Params\AddSipWhiteListItemParams $params = null): AddSipWhiteListItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddSipWhiteListItemReturn->$key = $value;
        }
        return $this->AddSipWhiteListItemReturn;
    }

    /**
     * @method Deletes the network address from the SIP white list.
     */
    public function DelSipWhiteListItem(Params\DelSipWhiteListItemParams $params = null): DelSipWhiteListItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelSipWhiteListItemReturn->$key = $value;
        }
        return $this->DelSipWhiteListItemReturn;
    }

    /**
     * @method Edits the SIP white list.
     */
    public function SetSipWhiteListItem(Params\SetSipWhiteListItemParams $params = null): SetSipWhiteListItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetSipWhiteListItemReturn->$key = $value;
        }
        return $this->SetSipWhiteListItemReturn;
    }

    /**
     * @method Gets the SIP white list.
     */
    public function GetSipWhiteList(Params\GetSipWhiteListParams $params = null): GetSipWhiteListReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSipWhiteListReturn->$key = $value;
        }
        return $this->GetSipWhiteListReturn;
    }
}
