<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\ActivateCallerIDReturn;
use Voximplant\Interfaces\AddCallerIDReturn;
use Voximplant\Interfaces\CallerIDsInterface;
use Voximplant\Interfaces\DelCallerIDReturn;
use Voximplant\Interfaces\GetCallerIDsReturn;
use Voximplant\Interfaces\VerifyCallerIDReturn;

class CallerIDs implements CallerIDsInterface
{
    protected $client;

    /** @object AddCallerID */
    protected $AddCallerIDReturn;

    /** @object ActivateCallerID */
    protected $ActivateCallerIDReturn;

    /** @object DelCallerID */
    protected $DelCallerIDReturn;

    /** @object GetCallerIDs */
    protected $GetCallerIDsReturn;

    /** @object VerifyCallerID */
    protected $VerifyCallerIDReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddCallerIDReturn = new AddCallerIDReturn();
        $this->ActivateCallerIDReturn = new ActivateCallerIDReturn();
        $this->DelCallerIDReturn = new DelCallerIDReturn();
        $this->GetCallerIDsReturn = new GetCallerIDsReturn();
        $this->VerifyCallerIDReturn = new VerifyCallerIDReturn();
    }

    /**
     * @method Adds a new caller ID. Caller ID is the phone that will be displayed to the called user. This number can be used for call back.
     */
    public function AddCallerID(Params\AddCallerIDParams $params = null): AddCallerIDReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddCallerIDReturn->$key = $value;
        }
        return $this->AddCallerIDReturn;
    }

    /**
     * @method Activates the CallerID by the verification code.
     */
    public function ActivateCallerID(Params\ActivateCallerIDParams $params = null): ActivateCallerIDReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->ActivateCallerIDReturn->$key = $value;
        }
        return $this->ActivateCallerIDReturn;
    }

    /**
     * @method Deletes the CallerID. Note: you can't delete a CID permanently (the antispam defence).
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

    /**
     * @method Gets a verification code by make call to the callerID number.
     */
    public function VerifyCallerID(Params\VerifyCallerIDParams $params = null): VerifyCallerIDReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->VerifyCallerIDReturn->$key = $value;
        }
        return $this->VerifyCallerIDReturn;
    }
}
