<?php

namespace Voximplant\Resources\Params;

class EditCallListTaskParams
{
    /** @var number Call list's ID */
    public $list_id;

    /** @var number Call list's task ID. Please specify either the task's ID or the task's UUID to edit the task */
    public $task_id;

    /** @var string Call list's task ID. Please specify either the task's ID or the task's UUID to edit the task. The UUID is unique within the call list */
    public $task_uuid;

    /** @var timestamp Next calling attempts timestamp in the yyyy-MM-dd HH:mm:ss format */
    public $start_at;

    /** @var number Number of remaining calling attempts */
    public $attempts_left;

    /** @var string Custom data string */
    public $custom_data;

    /** @var timestamp Optional. Start time for the daily calling attempts in the UTC+0 24-h format: HH:mm:ss format. If spefied, please specify `max_execution_time` as well */
    public $min_execution_time;

    /** @var timestamp Optional. End time for the daily calling attempts in the UTC+0 24-h format: HH:mm:ss format. If spefied, please specify `min_execution_time` as well */
    public $max_execution_time;
}
