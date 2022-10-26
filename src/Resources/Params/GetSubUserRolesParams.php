<?php

namespace Voximplant\Resources\Params;

class GetSubUserRolesParams
{
    /** @var number The subuser's ID */
    public $subuser_id;

    /** @var boolean Show the roles' additional properties */
    public $with_expanded_roles;

    public function toArray()
    {
        return [
                'subuser_id' => $this->subuser_id,
                    'with_expanded_roles' => $this->with_expanded_roles !== null ? (filter_var($this->with_expanded_roles, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
