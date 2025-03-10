<?php

/**
 * @method GetAccountPhoneNumberCountries Gets all countries where the specific account has phone numbers.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAccountPhoneNumberCountriesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - The application ID list separated by semicolons (;) to filter
 */
$params = new GetAccountPhoneNumberCountriesParams();

$params->application_id = 1;

// Get the countries where the account with id = 1 has phone numbers attached to the application with id = 1.
$result = $voxApi->PhoneNumbers->GetAccountPhoneNumberCountries($params);

// Show result
var_dump($result);
