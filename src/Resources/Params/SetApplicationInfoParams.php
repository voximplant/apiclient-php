<?php

namespace Voximplant\Resources\Params;

class SetApplicationInfoParams
{
    /** @var number The application ID. */
    public $application_id;

    /** @var string The application name that can be used instead of application_id. */
    public $required_application_name;

    /** @var string The new short application name in format [a-z][a-z0-9-]{1,79} */
    public $application_name;

    /** @var boolean Enable secure storage for all logs and records of the application */
    public $secure_record_storage;
}
