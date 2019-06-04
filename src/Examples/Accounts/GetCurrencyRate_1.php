<?php

/**
 * @method GetCurrencyRate Gets the exchange rate on selected date (per USD).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCurrencyRateParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * currency - The currency code list. Examples: RUR, EUR, USD
 */
$params = new GetCurrencyRateParams();

$params->currency = 'RUR';

// Get the current currency rate: RUR/USD.
$result = $voxApi->Accounts->GetCurrencyRate($params);

// Show result
var_dump($result);
