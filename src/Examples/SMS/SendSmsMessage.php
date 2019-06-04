<?php

/**
 * @method SendSmsMessage Send SMS message between two phone numbers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the <b>is_sms_supported</b> property in the objects returned by the <a href='//voximplant.com/docs/references/httpapi/managing_phone_numbers#getphonenumbers'>/GetPhoneNumbers</a> HTTP API) and SMS should be enabled for it via the <a href='//voximplant.com/docs/references/httpapi/managing_sms#controlsms'>/ControlSms</a> HTTP API. SMS messages can be received via HTTP callbacks, see <a href='//voximplant.com/blog/http-api-callbacks'>this article</a> for details.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SendSmsMessageParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * source - The source phone number.
 * destination - The destination phone number.
 * sms_body - The message.
 */
$params = new SendSmsMessageParams();

$params->source = '447443332211';
$params->destination = '447443332212';
$params->sms_body = 'Test message';

// Send the SMS message with text "Test message" from the phone number 447443332211 to the phone number 447443332212.
$result = $voxApi->SMS->SendSmsMessage($params);

// Show result
var_dump($result);
