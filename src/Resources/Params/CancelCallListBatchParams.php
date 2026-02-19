<?php

namespace Voximplant\Resources\Params;

class CancelCallListBatchParams
{
    /** @var number Call list ID */
    public $list_id;

    /** @var string The unique name of the call list. Can be used instead of list_id */
    public $list_name;

    /** @var string Batch UUIDs of the tasks to cancel, separated by semicolon (;) */
    public $batch_ids;
}
