<?php

/**
 * @method GetChildAccountSubscriptions Gets the active subscription(s) for the specified child account.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetChildAccountSubscriptionsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * child_account_id - The child account ID.
 * subscription_id - The subscription ID. If empty, then all the non-deactivated subscriptions for the current child account will be retrieved.
 */
$params = new GetChildAccountSubscriptionsParams();

$params->child_account_id = 10;
$params->subscription_id = 20;

// Get the subscription with ID = 20.
$result = $voxApi->ChildAccounts->GetChildAccountSubscriptions($params);

// Show result
var_dump($result);
