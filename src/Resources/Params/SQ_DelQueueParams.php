<?php

namespace Voximplant\Resources\Params;

class SQ_DelQueueParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of smart queue IDs separated by the ';' symbol. Use 'all' to delete all the queues */
    public $sq_queue_id;

    /** @var stringlist List of smart queue names separated by the ';' symbol. Can be used instead of sq_queue_id */
    public $sq_queue_name;
}
