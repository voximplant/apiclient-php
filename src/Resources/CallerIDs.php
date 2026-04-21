<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\CallerIDsInterface;
use Voximplant\Interfaces\DelCallerIDReturn;
use Voximplant\Interfaces\GetCallerIDsReturn;

class CallerIDs implements CallerIDsInterface
{
    protected $client;

    /** @object DelCallerID */
    protected $DelCallerIDReturn;

    /** @object GetCallerIDs */
    protected $GetCallerIDsReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->DelCallerIDReturn = new DelCallerIDReturn();
        $this->GetCallerIDsReturn = new GetCallerIDsReturn();
    }

    /**
     * @method Deletes the CallerID. Note: you cannot delete a CID permanently (the antispam defence).
     */
    public function DelCallerID(Params\DelCallerIDParams $params = null): DelCallerIDReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelCallerIDReturn->$key = $value;
        }
        return $this->DelCallerIDReturn;
    }

    /**
     * @method Gets the account callerIDs.
     */
    public function GetCallerIDs(Params\GetCallerIDsParams $params = null): GetCallerIDsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCallerIDsReturn->$key = $value;
        }
        return $this->GetCallerIDsReturn;
    }
}
