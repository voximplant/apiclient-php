<?php

namespace Voximplant\Resources\Params;

class SQ_BindAgentParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var number ID of the smart queue */
    public $sq_queue_id;

    /** @var string Name of the smart queue */
    public $sq_queue_name;

    /** @var intlist List of user IDs separated by the ';' symbol. Use 'all' to select all the users */
    public $user_id;

    /** @var stringlist List of user names separated by the ';' symbol. Can be used instead of user_id */
    public $user_name;

    /** @var [SQAgentBindingModes] Binding mode */
    public $bind_mode;
}
