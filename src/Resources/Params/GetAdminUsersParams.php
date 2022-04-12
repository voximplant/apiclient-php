<?php

namespace Voximplant\Resources\Params;

class GetAdminUsersParams
{
    /** @var number The admin user ID to filter */
    public $required_admin_user_id;

    /** @var string The admin user name part to filter */
    public $required_admin_user_name;

    /** @var string The admin user display name part to filter */
    public $admin_user_display_name;

    /** @var boolean The admin user active flag to filter */
    public $admin_user_active;

    /** @var boolean Set true to get the attached admin roles */
    public $with_roles;

    /** @var boolean Set true to get the admin user permissions */
    public $with_access_entries;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;
}
