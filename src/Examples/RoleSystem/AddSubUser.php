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
 * new_subuser_name - The new subuser login for managent api authentication, should be unique within the Voximplant account. The login specified is always converted to lowercase
 * new_subuser_password - The new subuser password. Must be at least 8 characters long and contain at least one uppercase and lowercase letter, one number, and one special character
 * role_id - The role id list separated by semicolon (;)
 * role_name - The role name list separated by semicolon (;)
 * description - Description of a new subuser
 */
$params = new AddSubUserParams();

$params->new_subuser_name = 'John_McClane';
$params->new_subuser_password = 'pssw0rd';

// Create a new subuser for account_id = 1.
$result = $voxApi->RoleSystem->AddSubUser($params);

// Show result
var_dump($result);
