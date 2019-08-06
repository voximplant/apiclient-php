<?php

/**
 * @method TransferMoneyToUser Transfer the account's money to the user or transfer the user's money to the account if the money amount is negative.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\TransferMoneyToUserParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * user_id - The user ID list or the 'all' value.
 * amount - The money amount, $. The absolute amount value must be equal or greater than 0.01
 * strict_mode - Returns error if strict_mode is true and a user or the account hasn't enough money.
 */
$params = new TransferMoneyToUserParams();

$params->user_id = 1;
$params->amount = -10000000.0;
$params->strict_mode = false;

// Transfer the all money from the user 1 to the parent account.
$result = $voxApi->Users->TransferMoneyToUser($params);

// Show result
var_dump($result);
