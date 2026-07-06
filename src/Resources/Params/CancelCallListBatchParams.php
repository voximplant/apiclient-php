<?php

namespace Voximplant\Resources\Params;

class CancelCallListBatchParams
{
    /** @var number Call list ID. Required unless list_name is provided. */
    public $list_id;

    /** @var string The unique name of the call list. Required unless list_id is provided. */
    public $list_name;

    /** @var string Batch UUIDs of the tasks to cancel, separated by semicolon (;) */
    public $batch_ids;
}
