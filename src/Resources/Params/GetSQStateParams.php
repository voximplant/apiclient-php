<?php

namespace Voximplant\Resources\Params;

class GetSQStateParams
{
    /** @var number The application ID to search by */
    public $application_id;

    /** @var string The application name to search by. Can be used instead of the application_id parameter */
    public $application_name;

    /** @var intlist The smart queue ID list separated by semicolon (;). Use the 'all' value to select all smart queues */
    public $sq_queue_id;

    /** @var stringlist The smart queue name list separated by semicolon (;). Can be used instead of sq_queue_id */
    public $sq_queue_name;

    /** @var string The selected timezone or the 'auto' value (the account location) */
    public $timezone;
}
