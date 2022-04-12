<?php

namespace Voximplant\Resources\Params;

class SQ_GetQueuesParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of smart queue IDs separated by the ';' symbol */
    public $sq_queue_id;

    /** @var stringlist List of smart queue names separated by the ';' symbol. Can be used instead of sq_queue_id */
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
}
