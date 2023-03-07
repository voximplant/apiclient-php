<?php

/**
 * @method DelAdminUser Deletes the specified admin user.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelAdminUserParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * required_admin_user_id - The admin user ID list separated by semicolon (;). Use the 'all' value to select all admin users
 * required_admin_user_name - The admin user name to delete, can be used instead of required_admin_user_id
 */
$params = new DelAdminUserParams();

$params->required_admin_user_id = 1;

// Delete the admin user.
$result = $voxApi->AdminUsers->DelAdminUser($params);

// Show result
var_dump($result);
