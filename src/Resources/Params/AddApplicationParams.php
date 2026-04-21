<?php

namespace Voximplant\Resources\Params;

class AddApplicationParams
{
    /** @var string Short application name in the \[a-z\]\[a-z0-9-\]{1,64} format */
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
