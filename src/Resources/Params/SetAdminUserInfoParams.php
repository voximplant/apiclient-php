<?php

namespace Voximplant\Resources\Params;

class SetAdminUserInfoParams
{
    /** @var number The admin user to edit. */
    public $required_admin_user_id;

    /** @var string The admin user to edit, can be used instead of required_admin_user_id. */
    public $required_admin_user_name;

    /** @var string The new admin user name. The length must be less than 50. */
    public $new_admin_user_name;

    /** @var string The new admin user display name. The length must be less than 256. */
    public $admin_user_display_name;

    /** @var string The new admin user password. The length must be at least 6 symbols. */
    public $new_admin_user_password;

    /** @var boolean The admin user enable flag. */
    public $admin_user_active;
}
