<?php

/**
 * @method SetAdminUserInfo Edits the specified admin user.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetAdminUserInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * required_admin_user_id - The admin user to edit
 * required_admin_user_name - The admin user to edit, can be used instead of required_admin_user_id
 * new_admin_user_name - The new admin user name. The length must be less than 50
 * admin_user_display_name - The new admin user display name. The length must be less than 256
 * new_admin_user_password - The new admin user password. The length must be at least 6 symbols
 * admin_user_active - The admin user enable flag
 */
$params = new SetAdminUserInfoParams();

$params->required_admin_user_id = 1;
$params->new_admin_user_password = '7654321';

// Edit the admin user password.
$result = $voxApi->AdminUsers->SetAdminUserInfo($params);

// Show result
var_dump($result);
