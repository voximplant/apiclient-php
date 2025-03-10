<?php

namespace Voximplant\Resources\Params;

class AddApplicationParams
{
    /** @var string The short application name in format \[a-z\]\[a-z0-9-\]{1,64} */
    public $application_name;

    /** @var boolean Whether to enable secure storage for all logs and records of the application */
    public $secure_record_storage;

    public function toArray()
    {
        return [
                'application_name' => $this->application_name,
                    'secure_record_storage' => $this->secure_record_storage !== null ? (filter_var($this->secure_record_storage, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
