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
 * currency - The amount currency. Examples: RUR, EUR, USD.
 */
$params = new TransferMoneyToUserParams();

$params->user_id = array (
    0 => 1,
    1 => 2,
);
$params->amount = 5.67;
$params->currency = 'USD';

// Transfer 5.67 $ to the user 1 and transfer 5.67 $ to the user 2 too. The account spends 2*5.67= 11.34 $ in total.
$result = $voxApi->Users->TransferMoneyToUser($params);

// Show result
var_dump($result);
