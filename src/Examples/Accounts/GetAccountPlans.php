<?php

/**
 * @method GetAccountPlans Gets the account plans with packages.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAccountPlansParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * plan_type - The plan type list separated by semicolon (;). The possible values are IM, MAU
 * plan_subscription_template_id - The plan ID list separated by semicolon (;)
 */
$params = new GetAccountPlansParams();


// Get all account plans with packages.
$result = $voxApi->Accounts->GetAccountPlans($params);

// Show result
var_dump($result);
