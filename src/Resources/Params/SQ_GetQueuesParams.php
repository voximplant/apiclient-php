<?php

namespace Voximplant\Resources\Params;

class SQ_GetQueuesParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist List of SmartQueue IDs separated by semicolons (;). Can be used instead of the sq_queue_name parameter */
    public $sq_queue_id;

    /** @var stringlist List of SmartQueue names separated by semicolons (;). Can be used instead of the sq_queue_id parameter */
    public $sq_queue_name;

    /** @var string Substring of the SmartQueue name to filter */
    public $sq_queue_name_template;

    /** @var intlist List of user IDs separated by semicolons (;). Queues bound to these users are returned. Can be used instead of the user_name parameter */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Can be used instead of the user_id parameter */
    public $user_name;

    /** @var intlist List of user IDs separated by semicolons (;). Queues bound to these users are excluded. Can be used instead of the excluded_user_name parameter */
    public $excluded_user_id;

    /** @var stringlist List of user names separated by semicolons (;). Can be used instead of the excluded_user_id parameter */
    public $excluded_user_name;

    /** @var number Number of items to show in the output */
    public $count;

    /** @var number Number of items to skip in the output */
    public $offset;

    /** @var boolean Whether to include the number of agents bound to the queue */
    public $with_agentcount;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'sq_queue_id' => $this->sq_queue_id,
                    'sq_queue_name' => $this->sq_queue_name,
                    'sq_queue_name_template' => $this->sq_queue_name_template,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'excluded_user_id' => $this->excluded_user_id,
                    'excluded_user_name' => $this->excluded_user_name,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'with_agentcount' => $this->with_agentcount !== null ? (filter_var($this->with_agentcount, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
