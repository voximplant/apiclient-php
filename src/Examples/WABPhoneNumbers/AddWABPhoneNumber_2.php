<?php

/**
 * @method AddWABPhoneNumber Adds a new WhatsApp Business phone number.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddWABPhoneNumberParams;

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
 * voice_password - WhatsApp Business SIP password
 * description - WhatsApp Business phone number description
 * application_id - Bound application ID
 * application_name - Bound application name that can be used instead of application_id
 * rule_id - Bound rule ID
 * rule_name - Bound rule name that can be used instead of rule_id
 */
$params = new AddWABPhoneNumberParams();

$params->wab_phone_number = '12126367890';
$params->voice_password = 'abc';
$params->application_id = 1234;

// Adds a new WhatsApp Business phone number.
$result = $voxApi->WABPhoneNumbers->AddWABPhoneNumber($params);

// Show result
var_dump($result);
