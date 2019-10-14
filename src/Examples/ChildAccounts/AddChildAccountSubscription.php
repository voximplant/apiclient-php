<?php

/**
 * @method AddChildAccountSubscription Adds a new subscription for the specified child account.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddChildAccountSubscriptionParams;

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
 * subscription_name - The subscription name.
 */
$params = new AddChildAccountSubscriptionParams();

$params->child_account_id = 10;
$params->template_id = '184';
$params->subscription_name = 'Meaningful subscription name';

// Create a subscription for the child account with ID = 10 using the subscription template with ID = 184.
$result = $voxApi->ChildAccounts->AddChildAccountSubscription($params);

// Show result
var_dump($result);
