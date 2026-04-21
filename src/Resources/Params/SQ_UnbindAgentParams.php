<?php

namespace Voximplant\Resources\Params;

class SQ_UnbindAgentParams
{
    /** @var number Application ID to search by */
    public $application_id;

    /** @var string Application name to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of SmartQueue IDs separated by semicolons (;). Use 'all' to select all the queues */
    public $sq_queue_id;

    /** @var stringlist List of SmartQueue names separated by semicolons (;). Can be used instead of sq_queue_id */
    public $sq_queue_name;

    /** @var intlist List of user IDs separated by semicolons (;). Use 'all' to select all the users */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Can be used instead of user_id */
    public $user_name;
}
