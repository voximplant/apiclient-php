<?php

namespace Voximplant\Resources\Params;

class EditCallListTasksPriorityParams
{
    /** @var number Call list ID. If the ID does not exist, the 251 error returns. */
    public $list_id;

    /** @var string JSON-encoded array of task objects. Each object should contain either 'task_id' (number) or 'task_uuid' (string), and 'task_priority' (number). */
    public $tasks;
}
