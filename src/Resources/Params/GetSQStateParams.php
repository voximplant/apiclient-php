<?php

namespace Voximplant\Resources\Params;

class GetSQStateParams
{
    /** @var number The application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string The application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist The SmartQueue ID list separated by semicolons (;). Use the 'all' value to select all SmartQueues. Required unless sq_queue_name is provided. */
    public $sq_queue_id;

    /** @var stringlist The SmartQueue name list separated by semicolons (;). Required unless sq_queue_id is provided. */
    public $sq_queue_name;

    /** @var string The selected timezone or the 'auto' value (the account location) */
    public $timezone;
}
