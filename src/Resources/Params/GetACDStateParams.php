<?php

namespace Voximplant\Resources\Params;

class GetACDStateParams
{
    /** @var intlist The ACD queue ID list separated by semicolons (;). Use the 'all' value to select all ACD queues */
    public $acd_queue_id;
}
