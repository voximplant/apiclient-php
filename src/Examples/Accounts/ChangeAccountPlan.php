<?php

/**
 * @method ChangeAccountPlan Configures the account's plan.<br><br>Please note that when you change the billing plan, we reserve the subscription fee and taxes for the upcoming month. Read more in the <a href='/docs/gettingstarted/billing'>Billing</a> page.
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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

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
