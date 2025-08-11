<?php

/**
 * @method DeleteSipRegistration Delete SIP registration.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DeleteSipRegistrationParams;

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
 * sip_registration_id - The registration ID
 */
$params = new DeleteSipRegistrationParams();

$params->cmd = 'DeleteSipRegistration';
$params->sip_registration_id = 1;

// Delete SIP registration with id 1.
$result = $voxApi->SIPRegistration->DeleteSipRegistration($params);

// Show result
var_dump($result);
