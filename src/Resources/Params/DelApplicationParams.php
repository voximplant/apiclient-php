<?php

namespace Voximplant\Resources\Params;

class DelApplicationParams
{
    /** @var intlist The application ID list separated by semicolons (;). Use the 'all' value to select all applications */
    public $application_id;

    /** @var stringlist The application name list separated by semicolons (;). Can be used instead of application_id */
    public $application_name;
}
