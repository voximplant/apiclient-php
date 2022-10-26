<?php

namespace Voximplant\Resources\Params;

class AddUserParams
{
    /** @var string The user name in format [a-z0-9][a-z0-9_-]{2,49} */
    public $user_name;

    /** @var string The user display name. The length must be less than 256 */
    public $user_display_name;

    /** @var string The user password. Must be at least 8 characters long and contain at least one uppercase and lowercase letter, one number, and one special character */
    public $user_password;

    /** @var number The application ID which a new user will be bound to. Can be used instead of the application_name parameter */
    public $application_id;

    /** @var string The application name which a new user will be bound to. Can be used instead of the application_id parameter */
    public $application_name;

    /** @var boolean 'True' if the user will use the parent account's money, 'false' if the user will have a separate balance */
    public $parent_accounting;

    /** @var string The user mobile phone. The length must be less than 50 */
    public $mobile_phone;

    /** @var boolean The user enable flag */
    public $user_active;

    /** @var string Any string */
    public $user_custom_data;

    public function toArray()
    {
        return [
                'user_name' => $this->user_name,
                    'user_display_name' => $this->user_display_name,
                    'user_password' => $this->user_password,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'parent_accounting' => $this->parent_accounting !== null ? (filter_var($this->parent_accounting, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'mobile_phone' => $this->mobile_phone,
                    'user_active' => $this->user_active !== null ? (filter_var($this->user_active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'user_custom_data' => $this->user_custom_data,
            ];
    }
}
