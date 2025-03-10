<?php

namespace Voximplant\Resources\Params;

class GetSQStateParams
{
    /** @var number The application ID to search by */
    public $application_id;

    /** @var string The application name to search by. Can be used instead of the application_id parameter */
    public $application_name;

    /** @var intlist The SmartQueue ID list separated by semicolons (;). Use the 'all' value to select all SmartQueues */
    public $sq_queue_id;

    /** @var stringlist The SmartQueue name list separated by semicolons (;). Can be used instead of sq_queue_id */
    public $sq_queue_name;

    /** @var string The selected timezone or the 'auto' value (the account location) */
    public $timezone;
}
