<?php

namespace Voximplant\Resources\Params;

class AddAdminRoleParams
{
    /** @var string The admin role name. The length must be less than 50 */
    public $admin_role_name;

    /** @var boolean The admin role enable flag. If false the allowed and denied entries have no affect */
    public $admin_role_active;

    /** @var intlist The admin role ID list separated by semicolon (;). Use the 'all' value to select all admin roles. The list specifies the roles from which the new role automatically copies all permissions (allowed_entries and denied_entries) */
    public $like_admin_role_id;

    /** @var stringlist The admin role name that can be used instead of like_admin_role_id. The name specifies a role from which the new role automatically copies all permissions (allowed_entries and denied_entries) */
    public $like_admin_role_name;

    /** @var stringlist The list of allowed access entries separated by semicolon (;) (the API function names) */
    public $allowed_entries;

    /** @var stringlist The list of denied access entries separated by semicolon (;) (the API function names) */
    public $denied_entries;

    public function toArray()
    {
        return [
                'admin_role_name' => $this->admin_role_name,
                    'admin_role_active' => $this->admin_role_active !== null ? (filter_var($this->admin_role_active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'like_admin_role_id' => $this->like_admin_role_id,
                    'like_admin_role_name' => $this->like_admin_role_name,
                    'allowed_entries' => $this->allowed_entries,
                    'denied_entries' => $this->denied_entries,
            ];
    }
}
