<?php

/**
 * @method A2PSendSms Sends an SMS message from the application to customers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the <b>is_sms_supported</b> property in the objects returned by the <a href='/docs/references/httpapi/managing_phone_numbers#getphonenumbers'>/GetPhoneNumbers</a> Management API) and SMS should be enabled for it via the <a href='/docs/references/httpapi/managing_sms#controlsms'>/ControlSms</a> Management API.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\A2PSendSmsParams;

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
 * src_number - The SenderID for outgoing SMS. Please contact support for installing a SenderID
 * dst_numbers - The destination phone numbers separated by semicolons (;). The maximum number of these phone numbers is 100
 * text - The message text, up to 1600 characters. We split long messages greater than 160 GSM-7 characters or 70 UTF-16 characters into multiple segments. Each segment is charged as one message
 * store_body - Whether to store outgoing message texts. Default value is false
 */
$params = new A2PSendSmsParams();

$params->src_number = '447443332211';
$params->dst_numbers = array (
    0 => '447443332212',
    1 => '447443332213',
);
$params->text = 'Test message';

// Send the SMS message with the text "Test message" from the phone number 447443332211 to the phone numbers 447443332212 and 447443332213.
$result = $voxApi->SMS->A2PSendSms($params);

// Show result
var_dump($result);
