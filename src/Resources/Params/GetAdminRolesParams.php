<?php

namespace Voximplant\Resources\Params;

class GetAdminRolesParams
{
    /** @var number The admin role ID to filter */
    public $admin_role_id;

    /** @var string The admin role name part to filter */
    public $admin_role_name;

    /** @var boolean The admin role active flag to filter */
    public $admin_role_active;

    /** @var boolean Set true to get the permissions */
    public $with_entries;

    /** @var boolean Set false to omit the account roles */
    public $with_account_roles;

    /** @var boolean Set false to omit the parent roles */
    public $with_parent_roles;

    /** @var boolean Set false to omit the system roles */
    public $with_system_roles;

    /** @var intlist The attached admin user ID list separated by the ';' symbol. Use the 'all' value to select all admin users */
    public $included_admin_user_id;

    /** @var intlist Not attached admin user ID list separated by the ';' symbol. Use the 'all' value to select all admin users */
    public $excluded_admin_user_id;

    /** @var string Set false to get roles with partial admin user list matching */
    public $full_admin_users_matching;

    /** @var number The admin user to show in the 'admin_users' field output */
    public $showing_admin_user_id;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;
}
