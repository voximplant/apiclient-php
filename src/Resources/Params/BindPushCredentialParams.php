<?php

namespace Voximplant\Resources\Params;

class BindPushCredentialParams
{
    /** @var intlist The push credentials ID list separated by semicolons (;) */
    public $push_credential_id;

    /** @var intlist The application ID list separated by semicolons (;). Use the 'all' value to select all applications */
    public $application_id;

    /** @var boolean Whether to bind or unbind (set true or false respectively) */
    public $bind;

    public function toArray()
    {
        return [
                'push_credential_id' => $this->push_credential_id,
                    'application_id' => $this->application_id,
                    'bind' => $this->bind !== null ? (filter_var($this->bind, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
