<?php

/**
 * @method UpdateSipRegistration Update SIP registration. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You can bind only one SIP registration to the user (the previous SIP registration will be auto unbound).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\UpdateSipRegistrationParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * sip_registration_id - The registration ID
 * application_id - The application ID which the SIP registration will be bound to. Could be used instead of the application_name parameter.
 */
$params = new UpdateSipRegistrationParams();

$params->sip_registration_id = 1;
$params->application_id = 123;

// Bind SIP registration with id 1 to the application with id 123.
$result = $voxApi->SIPRegistration->UpdateSipRegistration($params);

// Show result
var_dump($result);
