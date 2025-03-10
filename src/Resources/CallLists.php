<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AppendToCallListReturn;
use Voximplant\Interfaces\CallListsInterface;
use Voximplant\Interfaces\CancelCallListTaskReturn;
use Voximplant\Interfaces\CreateCallListReturn;
use Voximplant\Interfaces\DeleteCallListReturn;
use Voximplant\Interfaces\EditCallListTaskReturn;
use Voximplant\Interfaces\GetCallListDetailsReturn;
use Voximplant\Interfaces\GetCallListsReturn;
use Voximplant\Interfaces\RecoverCallListReturn;
use Voximplant\Interfaces\StopCallListProcessingReturn;

class CallLists implements CallListsInterface
{
    protected $client;

    /** @object CreateCallList */
    protected $CreateCallListReturn;

    /** @object AppendToCallList */
    protected $AppendToCallListReturn;

    /** @object DeleteCallList */
    protected $DeleteCallListReturn;

    /** @object GetCallLists */
    protected $GetCallListsReturn;

    /** @object GetCallListDetails */
    protected $GetCallListDetailsReturn;

    /** @object EditCallListTask */
    protected $EditCallListTaskReturn;

    /** @object CancelCallListTask */
    protected $CancelCallListTaskReturn;

    /** @object StopCallListProcessing */
    protected $StopCallListProcessingReturn;

    /** @object RecoverCallList */
    protected $RecoverCallListReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->CreateCallListReturn = new CreateCallListReturn();
        $this->AppendToCallListReturn = new AppendToCallListReturn();
        $this->DeleteCallListReturn = new DeleteCallListReturn();
        $this->GetCallListsReturn = new GetCallListsReturn();
        $this->GetCallListDetailsReturn = new GetCallListDetailsReturn();
        $this->EditCallListTaskReturn = new EditCallListTaskReturn();
        $this->CancelCallListTaskReturn = new CancelCallListTaskReturn();
        $this->StopCallListProcessingReturn = new StopCallListProcessingReturn();
        $this->RecoverCallListReturn = new RecoverCallListReturn();
    }

    /**
     * @method Adds a new CSV file for call list processing and starts the specified rule immediately. To send a file, use the request body. To set the call time constraints, use the following options in a CSV file: **__start_execution_time** – when the call list processing starts every day, UTC+0 24-h format: HH:mm:ss**__end_execution_time** – when the call list processing stops every day,  UTC+0 24-h format: HH:mm:ss**__start_at** – when the call list processing starts, UNIX timestamp. If not specified, the processing starts immediately after a method call**__task_uuid** – call list UUID. A string up to 40 characters, can contain latin letters, digits, hyphens (-) and colons (:). Unique within the call listThis method accepts CSV files with custom delimiters, such a commas (,), semicolons (;) and other. To specify a delimiter, pass it to the delimiter parameter.IMPORTANT: the account's balance should be equal or greater than 1 USD. If the balance is lower than 1 USD, the call list processing does not start, or it stops immediately if it is active.
     */
    public function CreateCallList(Params\CreateCallListParams $params = null): CreateCallListReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->CreateCallListReturn->$key = $value;
        }
        return $this->CreateCallListReturn;
    }

    /**
     * @method Appends a new task to the existing call list.This method accepts CSV files with custom delimiters, such a commas (,), semicolons (;) and other. To specify a delimiter, pass it to the delimiter parameter.
     */
    public function AppendToCallList(Params\AppendToCallListParams $params = null): AppendToCallListReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AppendToCallListReturn->$key = $value;
        }
        return $this->AppendToCallListReturn;
    }

    /**
     * @method Deletes an existing call list by its ID.
     */
    public function DeleteCallList(Params\DeleteCallListParams $params = null): DeleteCallListReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DeleteCallListReturn->$key = $value;
        }
        return $this->DeleteCallListReturn;
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
     * @method Gets details of the specified call list. Returns a CSV file by default.
     */
    public function GetCallListDetails(Params\GetCallListDetailsParams $params = null): GetCallListDetailsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCallListDetailsReturn->$key = $value;
        }
        return $this->GetCallListDetailsReturn;
    }

    /**
     * @method Edits the specified call list's task.
     */
    public function EditCallListTask(Params\EditCallListTaskParams $params = null): EditCallListTaskReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->EditCallListTaskReturn->$key = $value;
        }
        return $this->EditCallListTaskReturn;
    }

    /**
     * @method Cancels the specified tasks in the call list by their IDs or UUIDs.
     */
    public function CancelCallListTask(Params\CancelCallListTaskParams $params = null): CancelCallListTaskReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->CancelCallListTaskReturn->$key = $value;
        }
        return $this->CancelCallListTaskReturn;
    }

    /**
     * @method Stops processing the specified call list.
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
