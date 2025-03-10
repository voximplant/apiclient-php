<?php

namespace Voximplant\Resources\Params;

class RemoveSubUserRolesParams
{
    /** @var number The subuser's ID */
    public $subuser_id;

    /** @var intlist The role id list separated by semicolons (;) */
    public $role_id;

    /** @var stringlist The role name list separated by semicolons (;) */
    public $role_name;

    /** @var boolean Whether to remove roles from all subuser keys */
    public $force;

    public function toArray()
    {
        return [
                'subuser_id' => $this->subuser_id,
                    'role_id' => $this->role_id,
                    'role_name' => $this->role_name,
                    'force' => $this->force !== null ? (filter_var($this->force, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
