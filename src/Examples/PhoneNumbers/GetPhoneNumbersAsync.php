<?php

/**
 * @method GetPhoneNumbersAsync Gets the asynchronous report regarding purchased phone numbers.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetPhoneNumbersAsyncParams;

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
 * with_header - Whether to get a CSV file with the column names
 */
$params = new GetPhoneNumbersAsyncParams();

$params-> = '';

// Get two attached phone numbers.
$result = $voxApi->PhoneNumbers->GetPhoneNumbersAsync($params);

// Show result
var_dump($result);
