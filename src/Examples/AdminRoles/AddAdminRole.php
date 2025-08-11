<?php

/**
 * @method AddAdminRole Adds a new admin role.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddAdminRoleParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * admin_role_name - The admin role name. The length must be less than 50
 * admin_role_active - Whether the admin role is enabled. If false the allowed and denied entries have no affect
 * like_admin_role_id - The admin role ID list separated by semicolons (;). Use the 'all' value to select all admin roles. The list specifies the roles from which the new role automatically copies all permissions (allowed_entries and denied_entries)
 * like_admin_role_name - The admin role name that can be used instead of like_admin_role_id. The name specifies a role from which the new role automatically copies all permissions (allowed_entries and denied_entries)
 * allowed_entries - The list of allowed access entries separated by semicolons (;) (the API function names)
 * denied_entries - The list of denied access entries separated by semicolons (;) (the API function names)
 */
$params = new AddAdminRoleParams();

$params->admin_role_name = 'read_only';
$params->allowed_entries = array (
    0 => 'GetAccountInfo',
    1 => 'GetCallHistory',
);

// Add a new admin role with the GetAccountInfo and GetCallHistory permissions.
$result = $voxApi->AdminRoles->AddAdminRole($params);

// Show result
var_dump($result);
