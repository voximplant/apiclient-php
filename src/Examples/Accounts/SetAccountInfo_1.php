<?php

/**
 * @method SetAccountInfo Edits the account's profile.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetAccountInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * new_account_password - The password length must be at least 6 symbols.
 */
$params = new SetAccountInfoParams();

$params->account_password = '1234567';
$params->new_account_password = '7654321';

// Change the account's password.
$result = $voxApi->Accounts->SetAccountInfo($params);

// Show result
var_dump($result);
