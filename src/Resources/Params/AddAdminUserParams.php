<?php

namespace Voximplant\Resources\Params;

class AddAdminUserParams
{
    /** @var string The admin user name. The length must be less than 50 */
    public $new_admin_user_name;

    /** @var string The admin user display name. The length must be less than 256 */
    public $admin_user_display_name;

    /** @var string The admin user password. The length must be at least 6 symbols */
    public $new_admin_user_password;

    /** @var boolean The admin user enable flag */
    public $admin_user_active;

    /** @var string The role(s) ID created via Managing Admin Roles methods. The attaching admin role ID list separated by semicolon (;). Use the 'all' value to select all admin roles */
    public $admin_role_id;

    /** @var stringlist The role(s) name(s) created via Managing Admin Roles methods. The attaching admin role name that can be used instead of admin_role_id */
    public $admin_role_name;

    public function toArray()
    {
        return [
                'new_admin_user_name' => $this->new_admin_user_name,
                    'admin_user_display_name' => $this->admin_user_display_name,
                    'new_admin_user_password' => $this->new_admin_user_password,
                    'admin_user_active' => $this->admin_user_active !== null ? (filter_var($this->admin_user_active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'admin_role_id' => $this->admin_role_id,
                    'admin_role_name' => $this->admin_role_name,
            ];
    }
}
