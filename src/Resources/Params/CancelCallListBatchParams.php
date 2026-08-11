<?php

namespace Voximplant\Resources\Params;

class CancelCallListBatchParams
{
    /** @var number Call list ID */
    public $list_id;

    /** @var string Batch UUIDs of the tasks to cancel, separated by semicolon (;) */
    public $batch_ids;
}
