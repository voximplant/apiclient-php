<?php

/**
 * @method AddOutboundTestPhoneNumber Adds a personal phone number to test outgoing calls. Only one personal phone number can be used. To replace it with another, delete the existing one first.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddOutboundTestPhoneNumberParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * phone_number - The personal phone number in the E.164 format
 */
$params = new AddOutboundTestPhoneNumberParams();

$params->phone_number = '12223334444';

// Add a personal phone number.
$result = $voxApi->OutboundTestNumbers->AddOutboundTestPhoneNumber($params);

// Show result
var_dump($result);
