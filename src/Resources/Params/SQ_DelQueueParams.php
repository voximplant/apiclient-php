<?php

namespace Voximplant\Resources\Params;

class SQ_DelQueueParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist List of SmartQueue IDs separated by semicolons (;). Use 'all' to delete all the queues. Required unless sq_queue_name is provided. */
    public $sq_queue_id;

    /** @var stringlist List of SmartQueue names separated by semicolons (;). Required unless sq_queue_id is provided. */
    public $sq_queue_name;
}
