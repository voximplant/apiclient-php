<?php

/**
 * @method AttachAdminRole Attaches the admin role(s) to the already existing admin(s).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AttachAdminRoleParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * required_admin_user_id - The admin user ID list. Use the 'all' value to select all admin users
 * required_admin_user_name - The admin user name to bind, can be used instead of required_admin_user_id
 * admin_role_id - The role(s) ID created via Managing Admin Roles methods. The attached admin role ID list. Use the 'all' value to select alladmin roles
 * admin_role_name - The role(s) name(s) created via Managing Admin Roles methods. The admin role name to attach, can be used instead of admin_role_id
 * mode - The merge mode. The following values are possible: add, del, set
 */
$params = new AttachAdminRoleParams();

$params->required_admin_user_id = 'all';
$params->admin_role_id = array (
    0 => 1,
    1 => 2,
    2 => 3,
);

// Bind the all admin users with the admin roles 1, 2 and 3.
$result = $voxApi->AdminUsers->AttachAdminRole($params);

// Show result
var_dump($result);
