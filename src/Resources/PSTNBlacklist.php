<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddPstnBlackListItemReturn;
use Voximplant\Interfaces\DelPstnBlackListItemReturn;
use Voximplant\Interfaces\GetPstnBlackListReturn;
use Voximplant\Interfaces\PSTNBlacklistInterface;
use Voximplant\Interfaces\SetPstnBlackListItemReturn;

class PSTNBlacklist implements PSTNBlacklistInterface
{
    protected $client;

    /** @object AddPstnBlackListItem */
    protected $AddPstnBlackListItemReturn;

    /** @object SetPstnBlackListItem */
    protected $SetPstnBlackListItemReturn;

    /** @object DelPstnBlackListItem */
    protected $DelPstnBlackListItemReturn;

    /** @object GetPstnBlackList */
    protected $GetPstnBlackListReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddPstnBlackListItemReturn = new AddPstnBlackListItemReturn();
        $this->SetPstnBlackListItemReturn = new SetPstnBlackListItemReturn();
        $this->DelPstnBlackListItemReturn = new DelPstnBlackListItemReturn();
        $this->GetPstnBlackListReturn = new GetPstnBlackListReturn();
    }

    /**
     * @method Add a new phone number to the PSTN blacklist. Blacklist is used to block inbound calls from specified phone numbers to numbers purchased from Voximplant. Since we have no control over exact phone number format for calls from SIP integrations, blacklisting such numbers should be done via JavaScript scenarios.
     */
    public function AddPstnBlackListItem(Params\AddPstnBlackListItemParams $params = null): AddPstnBlackListItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddPstnBlackListItemReturn->$key = $value;
        }
        return $this->AddPstnBlackListItemReturn;
    }

    /**
     * @method Update the PSTN blacklist item. BlackList works for numbers that are purchased from Voximplant only. Since we have no control over exact phone number format for calls from SIP integrations, blacklisting such numbers should be done via JavaScript scenarios.
     */
    public function SetPstnBlackListItem(Params\SetPstnBlackListItemParams $params = null): SetPstnBlackListItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetPstnBlackListItemReturn->$key = $value;
        }
        return $this->SetPstnBlackListItemReturn;
    }

    /**
     * @method Remove phone number from the PSTN blacklist.
     */
    public function DelPstnBlackListItem(Params\DelPstnBlackListItemParams $params = null): DelPstnBlackListItemReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelPstnBlackListItemReturn->$key = $value;
        }
        return $this->DelPstnBlackListItemReturn;
    }

    /**
     * @method Get the whole PSTN blacklist.
     */
    public function GetPstnBlackList(Params\GetPstnBlackListParams $params = null): GetPstnBlackListReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetPstnBlackListReturn->$key = $value;
        }
        return $this->GetPstnBlackListReturn;
    }
}
