<?php

/**
 * @method GetPhoneNumberCategories Gets the phone number categories.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetPhoneNumberCategoriesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * country_code - Country code list
 * sandbox - Flag allows you to display phone number categories only of the sandbox, real or all .The following values are possible: 'all', 'true', 'false'
 * locale - The 2-letter locale code. Supported values are EN, RU
 */
$params = new GetPhoneNumberCategoriesParams();

$params->country_code = 'RU';

// Get the phone number categories in Russia.
$result = $voxApi->PhoneNumbers->GetPhoneNumberCategories($params);

// Show result
var_dump($result);
