<?php

/**
 * @method DeactivateChildAccountSubscription Deactivates the specified subscription(s).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DeactivateChildAccountSubscriptionParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * subscription_id - The subscription ID to be deactivated.
 * child_account_id - The child account ID.
 * subscription_finish_date - The deactivation UTC date in 24-h format: YYYY-MM-DD HH:mm:ss. If empty, then the current date + 1 day is used as a cancellation date.
 */
$params = new DeactivateChildAccountSubscriptionParams();

$params->subscription_id = 20;
$params->child_account_id = 10;
$params->subscription_finish_date = '2019-09-29 00:00:00';

// Deactivates the subscription with ID = 20 and subscription_finish_date = September 29th 2019.
$result = $voxApi->ChildAccounts->DeactivateChildAccountSubscription($params);

// Show result
var_dump($result);
