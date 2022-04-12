<?php

namespace Voximplant\Resources\Params;

class GetKeyValueItemParams
{
    /** @var string Key, up to 200 characters */
    public $key;

    /** @var number The application ID */
    public $application_id;

    /** @var string The application name */
    public $application_name;
}
