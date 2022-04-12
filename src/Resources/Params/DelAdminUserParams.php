<?php

namespace Voximplant\Resources\Params;

class DelAdminUserParams
{
    /** @var intlist The admin user ID list separated by the ';' symbol. Use the 'all' value to select all admin users */
    public $required_admin_user_id;

    /** @var stringlist The admin user name to delete, can be used instead of required_admin_user_id */
    public $required_admin_user_name;
}
