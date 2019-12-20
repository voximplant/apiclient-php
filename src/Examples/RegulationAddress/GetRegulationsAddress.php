<?php

/**
 * @method GetRegulationsAddress Search user's regulation address
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetRegulationsAddressParams;

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
 * regulation_address_id - The regulation address ID.
 * verification_id - The regulation address type ID.
 * verified - Show only verified regulation address.
 * in_progress - Show only in progress regulation address.
 * with_region_code - Return with phone_region_code parameters
 */
$params = new GetRegulationsAddressParams();

$params->regulation_address_id = 1;

// Search regulation address with ID = 1
$result = $voxApi->RegulationAddress->GetRegulationsAddress($params);

// Show result
var_dump($result);
