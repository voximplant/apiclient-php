<?php

/**
 * @method CreateSipRegistration Create a new SIP registration. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You should set is_persistent=true if you specify the user_id or user_name. You can bind only one SIP registration to the user (the previous SIP registration will be auto unbound).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\CreateSipRegistrationParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * sip_username - The user name.
 * proxy - The SIP proxy
 * auth_user - The SIP authentications user
 * outbound_proxy - The outbound SIP proxy
 * password - The SIP password
 * is_persistent - Is SIP registration persistent or on the user logon?
 * application_id - The application ID which new SIP registration will be bound to. Could be used instead of the application_name parameter.
 * application_name - The application name which new SIP registration will be bound to. Could be used instead of the application_id parameter.
 * rule_id - The rule ID which new SIP registration will be bound to. Could be used instead of the rule_name parameter.
 * rule_name - The rule name which new SIP registration will be bound to. Could be used instead of the rule_id parameter.
 * user_id - The user ID which new SIP registration will be bound to. Could be used instead of the user_name parameter.
 * user_name - The user name which new SIP registration will be bound to. Could be used instead of the user_id parameter.
 */
$params = new CreateSipRegistrationParams();

$params->sip_username = 'test';
$params->proxy = 'localhost';

// Create SIP registration.
$result = $voxApi->SIPRegistration->CreateSipRegistration($params);

// Show result
var_dump($result);
