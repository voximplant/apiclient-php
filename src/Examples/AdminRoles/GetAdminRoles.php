<?php

/**
 * @method GetAdminRoles Gets the admin roles.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAdminRolesParams;

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
 * admin_role_id - The admin role ID to filter
 * admin_role_name - The admin role name part to filter
 * admin_role_active - Whether the admin role is enabled to filter
 * with_entries - Whether to get the permissions
 * with_account_roles - Whether to include the account roles
 * with_parent_roles - Whether to include the parent roles
 * with_system_roles - Whether to include the system roles
 * included_admin_user_id - The attached admin user ID list separated by semicolons (;). Use the 'all' value to select all admin users
 * excluded_admin_user_id - Not attached admin user ID list separated by semicolons (;). Use the 'all' value to select all admin users
 * full_admin_users_matching - Set false to get roles with partial admin user list matching
 * showing_admin_user_id - The admin user to show in the 'admin_users' field output
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetAdminRolesParams();

$params->with_entries = true;
$params->showing_admin_user_id = 11;
$params->included_admin_user_id = 22;
$params->count = 2;

// Get two admin roles attached to the admin_user_id=22.
$result = $voxApi->AdminRoles->GetAdminRoles($params);

// Show result
var_dump($result);
