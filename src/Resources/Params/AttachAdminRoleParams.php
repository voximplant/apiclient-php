<?php

namespace Voximplant\Resources\Params;

class AttachAdminRoleParams
{
    /** @var intlist The admin user ID list separated by semicolons (;). Use the 'all' value to select all admin users */
    public $required_admin_user_id;

    /** @var stringlist The admin user name to bind, can be used instead of required_admin_user_id */
    public $required_admin_user_name;

    /** @var intlist The role(s) ID created via Managing Admin Roles methods. The attached admin role ID list separated by semicolons (;). Use the 'all' value to select alladmin roles */
    public $admin_role_id;

    /** @var stringlist The role(s) name(s) created via Managing Admin Roles methods. The admin role name to attach, can be used instead of admin_role_id */
    public $admin_role_name;

    /** @var string The merge mode. The following values are possible: add, del, set */
    public $mode;
}
