<?php

namespace Voximplant\Interfaces;

interface CallListsInterface
{
    /**
     * @method Adds a new CSV file for call list processing and starts the specified rule immediately. To send a file, use the request body. To set the call time constraints, use the following options in a CSV file: <ul><li>**__start_execution_time** – when the call list processing starts every day, UTC+0 24-h format: HH:mm:ss</li><li>**__end_execution_time** – when the call list processing stops every day,  UTC+0 24-h format: HH:mm:ss</li><li>**__start_at** – when the call list processing starts, UNIX timestamp. If not specified, the processing starts immediately after a method call</li><li>**__task_uuid** – call list UUID. A string up to 40 characters, can contain latin letters, digits, hyphens (-) and colons (:). Unique within the call list</li></ul><br>This method accepts CSV files with custom delimiters, such a commas (,), semicolons (;) and other. To specify a delimiter, pass it to the <b>delimiter</b> parameter.<br/><b>IMPORTANT:</b> the account's balance should be equal or greater than 1 USD. If the balance is lower than 1 USD, the call list processing does not start, or it stops immediately if it is active.
     */
    public function CreateCallList(\Voximplant\Resources\Params\CreateCallListParams $params);

    /**
     * @method Appends a new task to the existing call list.<br>This method accepts CSV files with custom delimiters, such a commas (,), semicolons (;) and other. To specify a delimiter, pass it to the <b>delimiter</b> parameter.
     */
    public function AppendToCallList(\Voximplant\Resources\Params\AppendToCallListParams $params);

    /**
     * @method Cancels all tasks in the call list with the specified batch UUID.
     */
    public function CancelCallListBatch(\Voximplant\Resources\Params\CancelCallListBatchParams $params);

    /**
     * @method Edits the specified call list by its ID.
     */
    public function EditCallList(\Voximplant\Resources\Params\EditCallListParams $params);

    /**
     * @method Edits priorities of existing tasks in the specified call list.
     */
    public function EditCallListTasksPriority(\Voximplant\Resources\Params\EditCallListTasksPriorityParams $params);

    /**
     * @method Deletes an existing call list by its ID.
     */
    public function DeleteCallList(\Voximplant\Resources\Params\DeleteCallListParams $params);

    /**
     * @method Get all call lists for the specified user.
     */
    public function GetCallLists(\Voximplant\Resources\Params\GetCallListsParams $params);

    /**
     * @method Gets details of the specified call list. Returns a CSV file by default.
     */
    public function GetCallListDetails(\Voximplant\Resources\Params\GetCallListDetailsParams $params);

    /**
     * @method Edits the specified call list's task.
     */
    public function EditCallListTask(\Voximplant\Resources\Params\EditCallListTaskParams $params);

    /**
     * @method Cancels the specified tasks in the call list by their IDs or UUIDs. The maximum number of tasks to cancel is 1000.
     */
    public function CancelCallListTask(\Voximplant\Resources\Params\CancelCallListTaskParams $params);

    /**
     * @method Stops processing the specified call list.
     */
    public function StopCallListProcessing(\Voximplant\Resources\Params\StopCallListProcessingParams $params);

    /**
     * @method Resume processing the specified call list.
     */
    public function RecoverCallList(\Voximplant\Resources\Params\RecoverCallListParams $params);
}
class CreateCallListReturn
{
    /** @var boolean Whether the request completed successfully */
    public $result;

    /** @var number Number of stored records */
    public $count;

    /** @var number List ID */
    public $list_id;

    /** @var string Batch UUID */
    public $batch_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class AppendToCallListReturn
{
    /** @var boolean Whether the request completed successfully */
    public $result;

    /** @var number Number of stored records */
    public $count;

    /** @var number List ID */
    public $list_id;

    /** @var number Batch UUID */
    public $batch_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class CancelCallListBatchReturn
{
    /** @var boolean Whether the request completed successfully */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class EditCallListReturn
{
    /** @var boolean Whether the request completed successfully */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class EditCallListTasksPriorityReturn
{
    /** @var string JSON-encoded array of each task update. */
    public $results;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DeleteCallListReturn
{
    /** @var boolean Result */
    public $result;

    /** @var string Text description */
    public $msg;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetCallListsReturn
{
    /** @var [CallListType] Array of lists */
    public $result;

    /** @var number Returned call list count */
    public $count;

    /** @var number Total found call list count */
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
class EditCallListTaskReturn
{
    /** @var boolean Whether the request completed successfully */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class CancelCallListTaskReturn
{
    /** @var number Task's ID */
    public $task_id;

    /** @var string Task's UUID */
    public $task_uuid;

    /** @var boolean Result of the operation */
    public $result;

    /** @var string Reason for the error */
    public $error_msg;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class StopCallListProcessingReturn
{
    /** @var boolean Whether the request completed successfully */
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
    /** @var boolean Whether the request completed successfully */
    public $result;

    /** @var number Number restored tasks */
    public $count_recovery;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
