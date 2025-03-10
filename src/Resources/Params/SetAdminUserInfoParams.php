<?php

namespace Voximplant\Resources\Params;

class SetAdminUserInfoParams
{
    /** @var number The admin user to edit */
    public $required_admin_user_id;

    /** @var string The admin user to edit, can be used instead of required_admin_user_id */
    public $required_admin_user_name;

    /** @var string The new admin user name. The length must be less than 50 */
    public $new_admin_user_name;

    /** @var string The new admin user display name. The length must be less than 256 */
    public $admin_user_display_name;

    /** @var string The new admin user password. The length must be at least 6 symbols */
    public $new_admin_user_password;

    /** @var boolean Whether the admin user is active */
    public $admin_user_active;

    public function toArray()
    {
        return [
                'required_admin_user_id' => $this->required_admin_user_id,
                    'required_admin_user_name' => $this->required_admin_user_name,
                    'new_admin_user_name' => $this->new_admin_user_name,
                    'admin_user_display_name' => $this->admin_user_display_name,
                    'new_admin_user_password' => $this->new_admin_user_password,
                    'admin_user_active' => $this->admin_user_active !== null ? (filter_var($this->admin_user_active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
