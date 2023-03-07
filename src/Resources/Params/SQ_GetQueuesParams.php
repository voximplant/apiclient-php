<?php

namespace Voximplant\Resources\Params;

class SQ_GetQueuesParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of smart queue IDs separated by semicolon (;) */
    public $sq_queue_id;

    /** @var stringlist List of smart queue names separated by semicolon (;). Can be used instead of sq_queue_id */
    public $sq_queue_name;

    /** @var string Substring of the smart queue name to filter */
    public $sq_queue_name_template;

    /** @var number ID of the user that is bound to the queue */
    public $user_id;

    /** @var string Name of the user that is bound to the queue. Can be used instead of user_id */
    public $user_name;

    /** @var number ID of the user that is not bound to the queue */
    public $excluded_user_id;

    /** @var string Name of the user that is not bound to the queue. Can be used instead of excluded_user_id */
    public $excluded_user_name;

    /** @var number Number of items to show in the output */
    public $count;

    /** @var number Number of items to skip in the output */
    public $offset;

    /** @var boolean Number of agents bound to the queue */
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
