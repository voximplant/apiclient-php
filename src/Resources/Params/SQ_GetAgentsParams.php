<?php

namespace Voximplant\Resources\Params;

class SQ_GetAgentsParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist List of SmartQueue IDs separated by semicolons (;). Use 'all' to select all the queues. Can be used instead of the sq_queue_name parameter */
    public $sq_queue_id;

    /** @var stringlist List of SmartQueue names separated by semicolons (;). Can be used instead of the sq_queue_id parameter */
    public $sq_queue_name;

    /** @var intlist List of SmartQueue IDs separated by semicolons (;). Agents bound to these queues are excluded. Use 'all' to select all the queues. Can be used instead of the excluded_sq_queue_name parameter */
    public $excluded_sq_queue_id;

    /** @var stringlist List of SmartQueue names separated by semicolons (;). Can be used instead of the excluded_sq_queue_id parameter */
    public $excluded_sq_queue_name;

    /** @var string Skills to filter in the JSON array format. The array should contain objects with the sq_skill_id/sq_skill_name, min_sq_skill_level, and max_sq_skill_level keys where skill levels range from 1 to 5 */
    public $sq_skills;

    /** @var intlist List of user IDs separated by semicolons (;). Can be used instead of the user_name parameter */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Can be used instead of the user_id parameter */
    public $user_name;

    /** @var string Substring of the user name to filter */
    public $user_name_template;

    /** @var string Filter statuses in the JSON array format. The array should contain objects with the sq_status_type and sq_status_name keys. Possible values for sq_status_type are 'CALL' and 'IM'. Possible values for sq_status_name are 'OFFLINE', 'ONLINE', 'READY', 'IN_SERVICE', 'AFTER_SERVICE', 'DND' */
    public $sq_statuses;

    /** @var boolean Whether to display agent skills */
    public $with_sq_skills;

    /** @var boolean Whether to display agent queues */
    public $with_sq_queues;

    /** @var boolean Whether to display agent current statuses */
    public $with_sq_statuses;

    /** @var number Number of items to show in the output */
    public $count;

    /** @var number Number of items to skip in the output */
    public $offset;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'sq_queue_id' => $this->sq_queue_id,
                    'sq_queue_name' => $this->sq_queue_name,
                    'excluded_sq_queue_id' => $this->excluded_sq_queue_id,
                    'excluded_sq_queue_name' => $this->excluded_sq_queue_name,
                    'sq_skills' => $this->sq_skills,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'user_name_template' => $this->user_name_template,
                    'sq_statuses' => $this->sq_statuses,
                    'with_sq_skills' => $this->with_sq_skills !== null ? (filter_var($this->with_sq_skills, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_sq_queues' => $this->with_sq_queues !== null ? (filter_var($this->with_sq_queues, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_sq_statuses' => $this->with_sq_statuses !== null ? (filter_var($this->with_sq_statuses, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
