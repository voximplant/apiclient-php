<?php

/**
 * @method GetWABPhoneNumbers Gets the account's WhatsApp Business phone numbers.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetWABPhoneNumbersParams;

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
 * wab_phone_number - WhatsApp Business phone number
 * application_id - Application ID that is bound to the WhatsApp Business phone number
 * application_name - Bound application name that can be used instead of application_id
 * country_code - Country code filter (2 symbols) for the WhatsApp Business phone number
 * count - Maximum returning records count
 * offset - Number of records to be skipped in the result
 */
$params = new GetWABPhoneNumbersParams();


$result = $voxApi->WABPhoneNumbers->GetWABPhoneNumbers($params);

// Show result
var_dump($result);
