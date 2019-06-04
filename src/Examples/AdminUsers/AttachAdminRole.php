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
 * required_admin_user_id - The admin user ID list or the 'all' value.
 * admin_role_id - The role(s) ID created via Managing Admin Roles methods. The attached admin role ID list or the 'all' value.
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
