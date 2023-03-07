<?php

/**
 * @method ControlSms Enables or disables sending and receiving SMS for the phone number. Can be used only for phone numbers with SMS support, which is indicated by the <b>is_sms_supported</b> property in the objects returned by the [GetPhoneNumbers] Management API. Each inbound SMS message is charged according to the <a href='//voximplant.com/pricing'>pricing</a>. If enabled, SMS can be sent from this phone number using the [SendSmsMessage] Management API and received using the [InboundSmsCallback] property of the HTTP callback. See <a href='/docs/guides/managementapi/callbacks'>this article</a> for HTTP callback details.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\ControlSmsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * phone_number - The phone number
 * command - The SMS control command. The following values are possible: enable, disable
 */
$params = new ControlSmsParams();

$params->phone_number = '447443332211';
$params->command = 'enable';

// Enable work with SMS for phone number 447443332211.
$result = $voxApi->SMS->ControlSms($params);

// Show result
var_dump($result);
