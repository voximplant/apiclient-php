<?php

namespace Voximplant\Resources\Params;

class DelApplicationParams
{
    /** @var intlist The application ID list separated by semicolons (;). Use the 'all' value to select all applications. Required unless application_name is provided. */
    public $application_id;

    /** @var stringlist The application name list separated by semicolons (;). Required unless application_id is provided. */
    public $application_name;
}
