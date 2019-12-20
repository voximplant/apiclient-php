<?php

/**
 * @method GetRegions Get available regions in country
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetRegionsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * country_code - The country code according to the ISO 3166-1 alpha-2.
 * phone_category_name - The phone category name. See the GetPhoneNumberCategories method.
 * city_name - The pattern of city's name
 * count - The returned regions count.
 * offset - The first N records will be skipped in the output.
 */
$params = new GetRegionsParams();

$params->country_code = 'DE';
$params->phone_category_name = 'GEOGRAPHIC';
$params->city_name = 'AACHEN';

// Get regions with city AACHEN.
$result = $voxApi->RegulationAddress->GetRegions($params);

// Show result
var_dump($result);
