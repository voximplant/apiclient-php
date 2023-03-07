<?php

namespace Voximplant\Resources\Params;

class SQ_BindAgentParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var string ID of the smart queue. Pass a list of values divided by ; or the "all" keyword */
    public $sq_queue_id;

    /** @var string Name of the smart queue. Pass a list of names divided by ; or the "all" keyword */
    public $sq_queue_name;

    /** @var intlist List of user IDs separated by semicolon (;). Use 'all' to select all the users */
    public $user_id;

    /** @var stringlist List of user names separated by semicolon (;). Can be used instead of user_id */
    public $user_name;

    /** @var [SQAgentBindingModes] Binding mode */
    public $bind_mode;
}
