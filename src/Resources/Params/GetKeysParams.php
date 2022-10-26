<?php

namespace Voximplant\Resources\Params;

class GetKeysParams
{
    /** @var string The key's ID */
    public $key_id;

    /** @var boolean Show roles for the key */
    public $with_roles;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    /** @var number The max returning record count */
    public $count;

    public function toArray()
    {
        return [
                'key_id' => $this->key_id,
                    'with_roles' => $this->with_roles !== null ? (filter_var($this->with_roles, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'offset' => $this->offset,
                    'count' => $this->count,
            ];
    }
}
