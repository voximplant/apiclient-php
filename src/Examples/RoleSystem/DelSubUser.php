<?php

/**
 * @method DelSubUser Deletes a subuser.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelSubUserParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * subuser_id - The subuser's ID
 */
$params = new DelSubUserParams();

$params->subuser_id = 12;

// Delete the subuser with id = 12 from account_id = 1.
$result = $voxApi->RoleSystem->DelSubUser($params);

// Show result
var_dump($result);
