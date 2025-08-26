<?php

/**
 * @method DeleteWABPhoneNumber Deletes a WhatsApp Business phone number.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DeleteWABPhoneNumberParams;

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
 * wab_phone_number - WhatsApp Business phone number to delete
 */
$params = new DeleteWABPhoneNumberParams();

$params->wab_phone_number = '12126367890';

// Deletes a WhatsApp Business phone number.
$result = $voxApi->WABPhoneNumbers->DeleteWABPhoneNumber($params);

// Show result
var_dump($result);
