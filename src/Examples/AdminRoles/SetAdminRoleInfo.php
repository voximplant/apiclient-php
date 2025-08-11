<?php

/**
 * @method SetAdminRoleInfo Edits the specified admin role.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetAdminRoleInfoParams;

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
 * admin_role_id - The admin role to edit
 * admin_role_name - The admin role to edit, can be used instead of admin_role_id
 * new_admin_role_name - The new admin role name. The length must be less than 50
 * admin_role_active - Whether the admin role is enabled. If false the allowed and denied entries have no affect
 * entry_modification_mode - The modification mode of the permission lists (allowed_entries and denied_entries). The following values are possible: add, del, set
 * allowed_entries - The list of allowed access entry changes separated by semicolons (;) (the API function names)
 * denied_entries - The list of denied access entry changes separated by semicolons (;) (the API function names)
 * like_admin_role_id - The admin role ID list separated by semicolons (;). Use the 'all' value to select all admin roles. The list specifies the roles from which the allowed_entries and denied_entries are merged
 * like_admin_role_name - The admin role name, can be used instead of like_admin_role_id. The name specifies a role from which the allowed_entries and denied_entries are merged
 */
$params = new SetAdminRoleInfoParams();

$params->admin_role_id = 1;
$params->entry_modification_mode = 'set';
$params->allowed_entries = 'all';
$params->denied_entries = array (
    0 => 'DelUser',
    1 => 'DelApplication',
);

// Allow the all permissions except the DelUser and DelApplication.
$result = $voxApi->AdminRoles->SetAdminRoleInfo($params);

// Show result
var_dump($result);
