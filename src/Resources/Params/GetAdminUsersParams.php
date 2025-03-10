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

    /** @var boolean Whether the admin user is active to filter */
    public $admin_user_active;

    /** @var boolean Whether to get the attached admin roles */
    public $with_roles;

    /** @var boolean Whether to get the admin user permissions */
    public $with_access_entries;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    public function toArray()
    {
        return [
                'required_admin_user_id' => $this->required_admin_user_id,
                    'required_admin_user_name' => $this->required_admin_user_name,
                    'admin_user_display_name' => $this->admin_user_display_name,
                    'admin_user_active' => $this->admin_user_active !== null ? (filter_var($this->admin_user_active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_roles' => $this->with_roles !== null ? (filter_var($this->with_roles, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_access_entries' => $this->with_access_entries !== null ? (filter_var($this->with_access_entries, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
