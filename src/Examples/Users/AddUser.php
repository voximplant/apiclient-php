<?php

/**
 * @method AddUser Adds a new user.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddUserParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * user_name - The user name in format [a-z0-9][a-z0-9_-]{2,49}
 * user_display_name - The user display name. The length must be less than 256
 * user_password - The user password. Must be at least 8 characters long and contain at least one uppercase and lowercase letter, one number, and one special character
 * application_id - The application ID which a new user will be bound to. Can be used instead of the application_name parameter
 * application_name - The application name which a new user will be bound to. Can be used instead of the application_id parameter
 * parent_accounting - 'True' if the user will use the parent account's money, 'false' if the user will have a separate balance
 * mobile_phone - The user mobile phone. The length must be less than 50
 * user_active - The user enable flag
 * user_custom_data - Any string
 */
$params = new AddUserParams();

$params->user_name = 'GordonFreeman';
$params->user_display_name = 'GordonFreeman';
$params->user_password = '1234567';
$params->application_id = 1;

// Add a new user.
$result = $voxApi->Users->AddUser($params);

// Show result
var_dump($result);
