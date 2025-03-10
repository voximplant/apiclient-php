<?php

namespace Voximplant\Resources\Params;

class GetAdminRolesParams
{
    /** @var number The admin role ID to filter */
    public $admin_role_id;

    /** @var string The admin role name part to filter */
    public $admin_role_name;

    /** @var boolean Whether the admin role is enabled to filter */
    public $admin_role_active;

    /** @var boolean Whether to get the permissions */
    public $with_entries;

    /** @var boolean Whether to include the account roles */
    public $with_account_roles;

    /** @var boolean Whether to include the parent roles */
    public $with_parent_roles;

    /** @var boolean Whether to include the system roles */
    public $with_system_roles;

    /** @var intlist The attached admin user ID list separated by semicolons (;). Use the 'all' value to select all admin users */
    public $included_admin_user_id;

    /** @var intlist Not attached admin user ID list separated by semicolons (;). Use the 'all' value to select all admin users */
    public $excluded_admin_user_id;

    /** @var string Set false to get roles with partial admin user list matching */
    public $full_admin_users_matching;

    /** @var number The admin user to show in the 'admin_users' field output */
    public $showing_admin_user_id;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    public function toArray()
    {
        return [
                'admin_role_id' => $this->admin_role_id,
                    'admin_role_name' => $this->admin_role_name,
                    'admin_role_active' => $this->admin_role_active !== null ? (filter_var($this->admin_role_active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_entries' => $this->with_entries !== null ? (filter_var($this->with_entries, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_account_roles' => $this->with_account_roles !== null ? (filter_var($this->with_account_roles, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_parent_roles' => $this->with_parent_roles !== null ? (filter_var($this->with_parent_roles, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_system_roles' => $this->with_system_roles !== null ? (filter_var($this->with_system_roles, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'included_admin_user_id' => $this->included_admin_user_id,
                    'excluded_admin_user_id' => $this->excluded_admin_user_id,
                    'full_admin_users_matching' => $this->full_admin_users_matching,
                    'showing_admin_user_id' => $this->showing_admin_user_id,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
