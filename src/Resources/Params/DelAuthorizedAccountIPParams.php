<?php

namespace Voximplant\Resources\Params;

class DelAuthorizedAccountIPParams
{
    /** @var string The authorized IP4 or network to remove. Set to 'all' to remove all items */
    public $authorized_ip;

    /** @var string Specify the parameter to remove the networks that contains the particular IP4. Can be used instead of authorized_ip */
    public $contains_ip;

    /** @var boolean Whether to remove the network from the white list. Set false to remove the network from the black list. Omit the parameter to remove the network from all lists */
    public $allowed;

    public function toArray()
    {
        return [
                'authorized_ip' => $this->authorized_ip,
                    'contains_ip' => $this->contains_ip,
                    'allowed' => $this->allowed !== null ? (filter_var($this->allowed, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
