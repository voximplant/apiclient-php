<?php

/**
 * @method AddSubUser Creates a subuser.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddSubUserParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 */
$params = new AddSubUserParams();

$params->login = 'test_login';
$params->password = 'test_pass';

// Create a new subuser for account_id = 1
$result = $voxApi->RoleSystem->AddSubUser($params);

// Show result
var_dump($result);
