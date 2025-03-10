<?php

namespace Voximplant\Resources\Params;

class AddAuthorizedAccountIPParams
{
    /** @var string The authorized IP4 or network */
    public $authorized_ip;

    /** @var boolean Whether to remove the IP from the blacklist */
    public $allowed;

    /** @var string The IP address description */
    public $description;

    public function toArray()
    {
        return [
                'authorized_ip' => $this->authorized_ip,
                    'allowed' => $this->allowed !== null ? (filter_var($this->allowed, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'description' => $this->description,
            ];
    }
}
