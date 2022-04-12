<?php

namespace Voximplant\Resources\Params;

class SetSubUserInfoParams
{
    /** @var number The subuser's ID */
    public $subuser_id;

    /** @var string The subuser old password. It is required if __new_subuser_password__ is specified */
    public $old_subuser_password;

    /** @var string The new user password. Must be at least 8 characters long and contain at least one uppercase and lowercase letter, one number, and one special character */
    public $new_subuser_password;

    /** @var string The new subuser description */
    public $description;
}
