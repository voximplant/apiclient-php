<?php

namespace Voximplant\Resources\Params;

class GetAuthorizedAccountIPsParams
{
    /** @var string The authorized IP4 or network to filter */
    public $authorized_ip;

    /** @var boolean Whether the IP is allowed */
    public $allowed;

    /** @var string Specify the parameter to filter the networks that contains the particular IP4 */
    public $contains_ip;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var string The IP address description */
    public $description;

    public function toArray()
    {
        return [
                'authorized_ip' => $this->authorized_ip,
                    'allowed' => $this->allowed !== null ? (filter_var($this->allowed, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'contains_ip' => $this->contains_ip,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'description' => $this->description,
            ];
    }
}
