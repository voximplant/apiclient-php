<?php

/**
 * @method SetSubUserInfo Edits a subuser.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetSubUserInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * subuser_id - The subuser's ID.
 * description - The new subuser description.
 */
$params = new SetSubUserInfoParams();

$params->subuser_id = 12;
$params->password = 'test_pass';
$params->description = 'test_desc';

// Edit the password and description for the subuser with id = 12 from account_id = 1
$result = $voxApi->RoleSystem->SetSubUserInfo($params);

// Show result
var_dump($result);
