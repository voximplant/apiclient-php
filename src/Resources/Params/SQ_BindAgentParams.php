<?php

namespace Voximplant\Resources\Params;

class SQ_BindAgentParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist List of SmartQueue IDs separated by semicolons (;). Use 'all' to select all the queues. Required unless sq_queue_name is provided. */
    public $sq_queue_id;

    /** @var stringlist List of SmartQueue names separated by semicolons (;). Required unless sq_queue_id is provided. */
    public $sq_queue_name;

    /** @var intlist List of user IDs separated by semicolons (;). Use 'all' to select all the users. Required unless user_name is provided. */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Required unless user_id is provided. */
    public $user_name;

    /** @var string Binding mode. Accepts one of the [SQAgentBindingModes] enum values */
    public $bind_mode;
}
