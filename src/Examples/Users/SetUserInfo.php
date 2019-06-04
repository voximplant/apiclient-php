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
 * user_id - The user to edit.
 * user_password - The new user password. The length must be at least 6 symbols.
 */
$params = new SetUserInfoParams();

$params->user_id = 1;
$params->user_password = '7654321';

// Edit the user password.
$result = $voxApi->Users->SetUserInfo($params);

// Show result
var_dump($result);
