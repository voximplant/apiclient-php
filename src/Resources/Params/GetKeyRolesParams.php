<?php

namespace Voximplant\Resources\Params;

class GetKeyRolesParams
{
    /** @var string The key's ID */
    public $key_id;

    /** @var boolean Whether to show the roles' additional properties */
    public $with_expanded_roles;

    public function toArray()
    {
        return [
                'key_id' => $this->key_id,
                    'with_expanded_roles' => $this->with_expanded_roles !== null ? (filter_var($this->with_expanded_roles, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
