<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\CallListsInterface;
use Voximplant\Interfaces\CreateCallListReturn;
use Voximplant\Interfaces\GetCallListDetailsReturn;
use Voximplant\Interfaces\GetCallListsReturn;
use Voximplant\Interfaces\RecoverCallListReturn;
use Voximplant\Interfaces\StopCallListProcessingReturn;

class CallLists implements CallListsInterface
{
    protected $client;

    /** @object CreateCallList */
    protected $CreateCallListReturn;

    /** @object GetCallLists */
    protected $GetCallListsReturn;

    /** @object GetCallListDetails */
    protected $GetCallListDetailsReturn;

    /** @object StopCallListProcessing */
    protected $StopCallListProcessingReturn;

    /** @object RecoverCallList */
    protected $RecoverCallListReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->CreateCallListReturn = new CreateCallListReturn();
        $this->GetCallListsReturn = new GetCallListsReturn();
        $this->GetCallListDetailsReturn = new GetCallListDetailsReturn();
        $this->StopCallListProcessingReturn = new StopCallListProcessingReturn();
        $this->RecoverCallListReturn = new RecoverCallListReturn();
    }

    /**
     * @method Adds a new CSV file for call list processing and starts the specified rule immediately. To send a file, use the request body. To set the call time constraints, use the following options in a CSV file: **__start_execution_time** – when the call list processing will start every day, UTC+0 24-h format: HH:mm:ss**__end_execution_time** – when the call list processing will stop every day,  UTC+0 24-h format: HH:mm:ss**__start_at** – when the call list processing will start, UNIX timestamp. If not specified, the processing will start immediately after a method callThis method accepts CSV files with custom delimiters, such a commas (,), semicolons (;) and other. To specify a delimiter, pass it to the delimiter parameter.IMPORTANT: the account's balance should be equal or greater than 1 USD. If the balance is lower than 1 USD, the call list processing won't start, or it stops immediately if it was active.
     */
    public function CreateCallList(Params\CreateCallListParams $params = null): CreateCallListReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->CreateCallListReturn->$key = $value;
        }
        return $this->CreateCallListReturn;
    }

    /**
     * @method Get all call lists for the specified user.
     */
    public function GetCallLists(Params\GetCallListsParams $params = null): GetCallListsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCallListsReturn->$key = $value;
        }
        return $this->GetCallListsReturn;
    }

    /**
     * @method Get details of the specified call list. Returns a CSV file by default.
     */
    public function GetCallListDetails(Params\GetCallListDetailsParams $params = null): GetCallListDetailsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCallListDetailsReturn->$key = $value;
        }
        return $this->GetCallListDetailsReturn;
    }

    /**
     * @method Stop processing the specified call list.
     */
    public function StopCallListProcessing(Params\StopCallListProcessingParams $params = null): StopCallListProcessingReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->StopCallListProcessingReturn->$key = $value;
        }
        return $this->StopCallListProcessingReturn;
    }

    /**
     * @method Resume processing the specified call list.
     */
    public function RecoverCallList(Params\RecoverCallListParams $params = null): RecoverCallListReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->RecoverCallListReturn->$key = $value;
        }
        return $this->RecoverCallListReturn;
    }
}
