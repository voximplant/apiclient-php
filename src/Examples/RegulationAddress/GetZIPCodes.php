<?php

/**
 * @method GetZIPCodes Searches for available zip codes.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetZIPCodesParams;

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
 * country_code - The country code according to the ISO 3166-1 alpha-2
 * phone_region_code - The phone region code
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetZIPCodesParams();

$params->country_code = 'DE';
$params->count = 1;

// Search for zip codes in Germany.
$result = $voxApi->RegulationAddress->GetZIPCodes($params);

// Show result
var_dump($result);
