<?php

/**
 * @method GetMoneyAmountToCharge Get the recommended money amount to charge.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetMoneyAmountToChargeParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * currency - The currency name. Examples: USD, RUR, EUR
 * charge_date - The next charge date, format: YYYY-MM-DD
 */
$params = new GetMoneyAmountToChargeParams();

$params->currency = 'USD';

// Get the recommended money amount to charge in USD.
$result = $voxApi->Accounts->GetMoneyAmountToCharge($params);

// Show result
var_dump($result);
