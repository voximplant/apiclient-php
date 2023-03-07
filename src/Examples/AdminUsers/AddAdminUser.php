<?php

/**
 * @method AddAdminUser Adds a new admin user into the specified parent or child account.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddAdminUserParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * new_admin_user_name - The admin user name. The length must be less than 50
 * admin_user_display_name - The admin user display name. The length must be less than 256
 * new_admin_user_password - The admin user password. The length must be at least 6 symbols
 * admin_user_active - The admin user enable flag
 * admin_role_id - The role(s) ID created via Managing Admin Roles methods. The attaching admin role ID list separated by semicolon (;). Use the 'all' value to select all admin roles
 * admin_role_name - The role(s) name(s) created via Managing Admin Roles methods. The attaching admin role name that can be used instead of admin_role_id
 */
$params = new AddAdminUserParams();

$params->new_admin_user_name = 'Overseer_Campbell';
$params->admin_user_display_name = 'Overseer_Campbell';
$params->new_admin_user_password = '1234567';
$params->admin_role_id = '1';

// Add a new admin user.
$result = $voxApi->AdminUsers->AddAdminUser($params);

// Show result
var_dump($result);
