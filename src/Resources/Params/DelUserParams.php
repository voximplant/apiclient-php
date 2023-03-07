<?php

namespace Voximplant\Resources\Params;

class DelUserParams
{
    /** @var intlist The user ID list separated by semicolon (;). Use the 'all' value to select all users */
    public $user_id;

    /** @var stringlist The user name list separated by semicolon (;) that can be used instead of user_id */
    public $user_name;

    /** @var number Delete the specified users bound to the application ID. It is required if the user_name is specified */
    public $application_id;

    /** @var string Delete the specified users bound to the application name. Can be used instead of the application_id parameter */
    public $application_name;
}
