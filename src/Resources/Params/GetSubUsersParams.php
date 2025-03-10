<?php

namespace Voximplant\Resources\Params;

class GetSubUsersParams
{
    /** @var number The subuser's ID */
    public $subuser_id;

    /** @var boolean Whether to show subuser's roles */
    public $with_roles;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var number The max returning record count */
    public $count;

    public function toArray()
    {
        return [
                'subuser_id' => $this->subuser_id,
                    'with_roles' => $this->with_roles !== null ? (filter_var($this->with_roles, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'offset' => $this->offset,
                    'count' => $this->count,
            ];
    }
}
