<?php

/**
 * @method GetSubscriptionPrice Gets the subscription template price.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSubscriptionPriceParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * subscription_template_id - The subscription template ID list
 * subscription_template_type - The subscription template type. The following values are possible: PHONE_NUM, SIP_REGISTRATION
 * subscription_template_name - The subscription template name  (example: SIP registration, Phone GB, Phone RU 495, ...)
 * count - The max returning record count
 * offset - The first N records will be skipped in the output
 */
$params = new GetSubscriptionPriceParams();

$params->subscription_template_type = 'SIP_REGISTRATION';

// Get the SIP registration subscription template.
$result = $voxApi->Accounts->GetSubscriptionPrice($params);

// Show result
var_dump($result);
