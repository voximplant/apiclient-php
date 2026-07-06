<?php

namespace Voximplant\Resources\Params;

class DelQueueParams
{
    /** @var intlist The ACD queue ID list separated by semicolons (;). Required unless acd_queue_name is provided. */
    public $acd_queue_id;

    /** @var stringlist The ACD queue name. The ACD queue name list separated by semicolons (;). Required unless acd_queue_id is provided. */
    public $acd_queue_name;
}
