<?php

/**
 * @method SetUserInfo Edits the user.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetUserInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * user_id - The user to edit
 * user_name - The user name that can be used instead of user_id
 * application_id - The application ID. It is required if the user_name is specified
 * application_name - The application name that can be used instead of application_id
 * new_user_name - The new user name in format [a-z0-9][a-z0-9_-]{2,49}
 * user_display_name - The new user display name. The length must be less than 256
 * user_password - The new user password. Must be at least 8 characters long and contain at least one uppercase and lowercase letter, one number, and one special character
 * parent_accounting - Whether to use the parent account's money, 'false' to use a separate user balance
 * user_active - Whether the user is active. Inactive users cannot log in to applications
 * user_custom_data - Any string
 * mobile_phone - The new user mobile phone. The length must be less than 50
 */
$params = new SetUserInfoParams();

$params->user_id = 1;
$params->user_password = '7654321';

// Edit the user password.
$result = $voxApi->Users->SetUserInfo($params);

// Show result
var_dump($result);
