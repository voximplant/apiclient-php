<?php

namespace Voximplant\Resources\Params;

class SQ_SetAgentInfoParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of user IDs separated by semicolons (;). Use 'all' to select all the users */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Can be used instead of user_id */
    public $user_name;

    /** @var number Maximum number of chats that the user processes simultaneously */
    public $max_simultaneous_conversations;

    /** @var boolean Whether the agent can handle calls. When set to false, the agent is excluded from the CALL-request distribution */
    public $handle_calls;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'max_simultaneous_conversations' => $this->max_simultaneous_conversations,
                    'handle_calls' => $this->handle_calls !== null ? (filter_var($this->handle_calls, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
