<?php

/**
 * @method GetAccountInfo Gets the account's info such as account_id, account_name, account_email etc.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAccountInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * return_live_balance - Whether to get the account's live balance
 */
$params = new GetAccountInfoParams();


// Get the account's info.
$result = $voxApi->Accounts->GetAccountInfo($params);

// Show result
var_dump($result);
