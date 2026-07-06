<?php

namespace Voximplant\Resources\Params;

class DelUserParams
{
    /** @var intlist The user ID list separated by semicolons (;). Use the 'all' value to select all users. Required unless user_name is provided. */
    public $user_id;

    /** @var stringlist The user name list separated by semicolons (;). Required unless user_id is provided. */
    public $user_name;

    /** @var number Delete the specified users bound to the application ID. It is required if the user_name is specified */
    public $application_id;

    /** @var string Delete the specified users bound to the application name. Can be used instead of the application_id parameter */
    public $application_name;
}
