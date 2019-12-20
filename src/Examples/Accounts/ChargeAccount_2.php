<?php

/**
 * @method ChargeAccount Charges the account in the manual mode. You should call the ChargeAccount function to charge the subscriptions having the auto_charge=false.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\ChargeAccountParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * phone_id - The phone ID list or the 'all' value. You should specify the phones having the auto_charge=false.
 * phone_number - Can be used instead of phone_id. The phone number list or the 'all' value. You should specify the phones having the auto_charge=false.
 */
$params = new ChargeAccountParams();

$params->phone_number = 'all';

// Charge the all frozen phone numbers.
$result = $voxApi->Accounts->ChargeAccount($params);

// Show result
var_dump($result);
