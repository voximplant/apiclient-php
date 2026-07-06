<?php

namespace Voximplant\Resources\Params;

class BindUserToQueueParams
{
    /** @var boolean Whether to bind or unbind users */
    public $bind;

    /** @var number The application ID. Required unless application_name is provided. */
    public $application_id;

    /** @var string The application name. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist The user ID list separated by semicolons (;). Use the 'all' value to specify all users bound to the application. Required unless user_name is provided. */
    public $user_id;

    /** @var stringlist The user name list separated by semicolons (;). Required unless user_id is provided. */
    public $user_name;

    /** @var intlist The ACD queue ID list separated by semicolons (;). Use the 'all' value to specify all queues bound to the application. Required unless acd_queue_name is provided. */
    public $acd_queue_id;

    /** @var stringlist The queue name. The queue name list separated by semicolons (;). Required unless acd_queue_id is provided. */
    public $acd_queue_name;

    public function toArray()
    {
        return [
                'bind' => $this->bind !== null ? (filter_var($this->bind, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'acd_queue_id' => $this->acd_queue_id,
                    'acd_queue_name' => $this->acd_queue_name,
            ];
    }
}
