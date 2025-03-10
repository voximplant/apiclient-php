<?php

namespace Voximplant\Resources\Params;

class SetApplicationInfoParams
{
    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $required_application_name;

    /** @var string The new short application name in format [a-z][a-z0-9-]{1,79} */
    public $application_name;

    /** @var boolean Whether to enable secure storage for all logs and records of the application */
    public $secure_record_storage;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'required_application_name' => $this->required_application_name,
                    'application_name' => $this->application_name,
                    'secure_record_storage' => $this->secure_record_storage !== null ? (filter_var($this->secure_record_storage, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
