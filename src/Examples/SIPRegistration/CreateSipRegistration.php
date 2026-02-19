<?php

/**
 * @method CreateSipRegistration Creates a new SIP registration (the platform registers as a user on a 3rd party SIP server).<br><br>There are two modes of SIP registration:<br><ol><li>Persistent registration, when the platform registers on a 3rd party SIP server as a user and the registration lasts until deleted (or there are network/technical issues with it — see the corresponding callback)</li><li>Non-persistent registration (set `is_persistent` to false) which is initiated only when the specificed user (with `user_id` or `user_name`) logs in via one of Voximplant SDKs. As soon the user logs off, the registration goes offline. This mode helps to implement SIP softphone-like apps using Voximplant’s SDKs.</li></ol><br>Please note that when you create a SIP registration, we reserve the subscription fee and taxes for the upcoming month. Read more in the <a href='/docs/gettingstarted/billing'>Billing</a> page.
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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * sip_username - The user name
 * proxy - The SIP proxy
 * auth_user - The SIP authentications user
 * outbound_proxy - The outgoing SIP proxy
 * password - The SIP password
 * is_persistent - Whether SIP registration is persistent. Set false to activate it only on the user login
 * application_id - The application ID which a new SIP registration is to be bound to. Can be used instead of the application_name parameter
 * application_name - The application name which a new SIP registration is to be bound to. Can be used instead of the application_id parameter
 * rule_id - The rule ID which a new SIP registration is to be bound to. Can be used instead of the rule_name parameter
 * rule_name - The rule name which a new SIP registration is to be bound to. Can be used instead of the rule_id parameter
 * user_id - The user ID which a new SIP registration is to be bound to. Can be used instead of the user_name parameter
 * user_name - The user name which a new SIP registration is to be bound to. Can be used instead of the user_id parameter
 */
$params = new CreateSipRegistrationParams();

$params->sip_username = 'JohnGalt';
$params->proxy = 'localhost';

// Create SIP registration.
$result = $voxApi->SIPRegistration->CreateSipRegistration($params);

// Show result
var_dump($result);
