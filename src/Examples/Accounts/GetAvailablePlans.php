<?php

/**
 * @method GetAvailablePlans Gets the allowed plans to change.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAvailablePlansParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * plan_type - The plan type list. The possible values are IM, MAU
 * plan_subscription_template_id - The plan ID list
 */
$params = new GetAvailablePlansParams();

$params->plan_type = 'IM';

// Get allowed IM plans to change.
$result = $voxApi->Accounts->GetAvailablePlans($params);

// Show result
var_dump($result);
