<?php

namespace Voximplant\Resources\Params;

class GetSubUserRolesParams
{
    /** @var number The subuser's ID */
    public $subuser_id;

    /** @var boolean Show the roles' additional properties */
    public $with_expanded_roles;
}
