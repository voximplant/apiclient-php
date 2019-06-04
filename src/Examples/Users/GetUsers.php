<?php

/**
 * @method GetUsers Shows the users of the specified account.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetUsersParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * count - The max returning record count.
 */
$params = new GetUsersParams();

$params->count = 2;

// Get two first identities.
$result = $voxApi->Users->GetUsers($params);

// Show result
var_dump($result);
