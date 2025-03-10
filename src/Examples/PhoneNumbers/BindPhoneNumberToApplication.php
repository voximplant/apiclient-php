<?php

/**
 * @method BindPhoneNumberToApplication Bind the phone number to the application or unbind the phone number from the application. You should specify the application_id or application_name if you specify the rule_name.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\BindPhoneNumberToApplicationParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * phone_id - The phone ID list separated by semicolons (;). Use the 'all' value to select all phone ids
 * phone_number - The phone number list separated by semicolons (;) that can be used instead of phone_id
 * application_id - The application ID
 * application_name - The application name that can be used instead of application_id
 * rule_id - The rule ID
 * rule_name - The rule name that can be used instead of rule_id
 * bind - Whether to bind or unbind (set true or false respectively)
 */
$params = new BindPhoneNumberToApplicationParams();

$params->phone_id = 1;
$params->application_id = 1;

// Bind the phone 1 to the application 1.
$result = $voxApi->PhoneNumbers->BindPhoneNumberToApplication($params);

// Show result
var_dump($result);
