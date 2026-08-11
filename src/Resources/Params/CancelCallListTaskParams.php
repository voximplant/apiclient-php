<?php

namespace Voximplant\Resources\Params;

class CancelCallListTaskParams
{
    /** @var string Account's ID */
    public $account_id;

    /** @var number Call list's ID */
    public $list_id;

    /** @var intlist Task IDs separated by a semicolon. Specify either `tasks_ids` or `tasks_uuids`. The method returns an error if none of the parameters is specified */
    public $tasks_ids;

    /** @var stringlist Task UUIDs separated by a semicolon. Specify either `tasks_ids` or `tasks_uuids`. The method returns an error if none of the parameters is specified */
    public $tasks_uuids;
}
