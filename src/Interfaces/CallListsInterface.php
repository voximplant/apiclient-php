<?php

namespace Voximplant\Interfaces;

interface CallListsInterface
{
    /**
     * @method Adds a new CSV file for manual call list processing and bind it with the specified rule. To send a file, use the request body. To start processing calls, use the function [StartNextCallTask]. <b>IMPORTANT:</b> the account's balance should be equal or greater than 1 USD. If the balance is lower than 1 USD, the call list processing won't start, or it stops immediately if it was active.
     */
    public function CreateManualCallList(\Voximplant\Resources\Params\CreateManualCallListParams $params);

    /**
     * @method Start processing the next task.
     */
    public function StartNextCallTask(\Voximplant\Resources\Params\StartNextCallTaskParams $params);

    /**
     * @method Get all call lists for the specified user.
     */
    public function GetCallLists(\Voximplant\Resources\Params\GetCallListsParams $params);

    /**
     * @method Get details of the specified call list. Returns a CSV file by default.
     */
    public function GetCallListDetails(\Voximplant\Resources\Params\GetCallListDetailsParams $params);

    /**
     * @method Stop processing the specified call list.
     */
    public function StopCallListProcessing(\Voximplant\Resources\Params\StopCallListProcessingParams $params);

    /**
     * @method Resume processing the specified call list.
     */
    public function RecoverCallList(\Voximplant\Resources\Params\RecoverCallListParams $params);
}
class CreateManualCallListReturn
{
    /** @var boolean true */
    public $result;

    /** @var number The number of stored records */
    public $count;

    /** @var number The list ID */
    public $list_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class StartNextCallTaskReturn
{
    /** @var number true */
    public $result;

    /** @var number The list id */
    public $list_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetCallListsReturn
{
    /** @var [CallListType] Array of lists */
    public $result;

    /** @var number The returned call list count */
    public $count;

    /** @var number The total found call list count */
    public $total_count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetCallListDetailsReturn
{
    /** @var [CallListDetailType] Array of tasks for the roll call */
    public $result;

    /** @var number The number of tasks */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class StopCallListProcessingReturn
{
    /** @var boolean true */
    public $result;

    /** @var string Result message */
    public $msg;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class RecoverCallListReturn
{
    /** @var boolean true */
    public $result;

    /** @var number Number restored tasks */
    public $count_recovery;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
