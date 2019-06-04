<?php

/**
 * @method GetCountries Get all countries
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCountriesParams;

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
 */
$params = new GetCountriesParams();

$params->country_code = 'DE';

// Get Germany
$result = $voxApi->RegulationAddress->GetCountries($params);

// Show result
var_dump($result);
