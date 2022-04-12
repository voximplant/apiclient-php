<?php

/**
 * @method ChangeAccountPlan Configures the account's plan.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\ChangeAccountPlanParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * plan_type - The plan type to config. The possible values are IM, MAU
 * plan_subscription_template_id - The new plan ID with a price larger than the current plan's (see [GetAvailablePlans])
 */
$params = new ChangeAccountPlanParams();

$params->plan_type = 'IM';
$params->plan_subscription_template_id = 3;

// Change the IM plan.
$result = $voxApi->Accounts->ChangeAccountPlan($params);

// Show result
var_dump($result);
