<?php

/**
 * @method LinkRegulationAddress Links the regulation address to a phone.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\LinkRegulationAddressParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * regulation_address_id - The regulation address ID
 * phone_id - The phone ID for link
 * phone_number - The phone number for link
 */
$params = new LinkRegulationAddressParams();

$params->regulation_address_id = 1;
$params->phone_id = 1;

// Link the regulation address to a phone number.
$result = $voxApi->RegulationAddress->LinkRegulationAddress($params);

// Show result
var_dump($result);
