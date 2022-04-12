<?php

namespace Voximplant\Resources\Params;

class BindUserToQueueParams
{
    /** @var boolean Bind or unbind users */
    public $bind;

    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var intlist The user ID list separated by the ';' symbol. Use the 'all' value to specify all users bound to the application */
    public $user_id;

    /** @var stringlist The user name list separated by the ';' symbol. user_name can be used instead of user_id */
    public $user_name;

    /** @var intlist The ACD queue ID list separated by the ';' symbol. Use the 'all' value to specify all queues bound to the application */
    public $acd_queue_id;

    /** @var stringlist The queue name that can be used instead of acd_queue_id. The queue name list separated by the ';' symbol */
    public $acd_queue_name;
}
