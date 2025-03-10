<?php

namespace Voximplant\Resources\Params;

class AddSubUserParams
{
    /** @var string The new subuser login for management api authentication, should be unique within the Voximplant account. The login specified is always converted to lowercase */
    public $new_subuser_name;

    /** @var string The new subuser password. Must be at least 8 characters long and contain at least one uppercase and lowercase letter, one number, and one special character */
    public $new_subuser_password;

    /** @var intlist The role id list separated by semicolons (;) */
    public $role_id;

    /** @var stringlist The role name list separated by semicolons (;) */
    public $role_name;

    /** @var string Description of a new subuser */
    public $description;
}
