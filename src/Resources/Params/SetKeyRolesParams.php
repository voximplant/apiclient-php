<?php

namespace Voximplant\Resources\Params;

class SetKeyRolesParams
{
    /** @var string The key's ID */
    public $key_id;

    /** @var intlist The role id list separated by semicolons (;) */
    public $role_id;

    /** @var stringlist The role name list separated by semicolons (;) */
    public $role_name;
}
