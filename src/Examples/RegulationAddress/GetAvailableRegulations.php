<?php

/**
 * @method GetAvailableRegulations Search available regulation for link
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAvailableRegulationsParams;

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
 * phone_region_code - The phone region code. See the GetRegions method.
 */
$params = new GetAvailableRegulationsParams();

$params->country_code = 'DE';
$params->phone_category_name = 'GEOGRAPHIC';
$params->phone_region_code = '643';

// Search available regulation address
$result = $voxApi->RegulationAddress->GetAvailableRegulations($params);

// Show result
var_dump($result);
