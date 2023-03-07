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
 * phone_id - The phone ID list separated by semicolon (;). Use the 'all' value to select all phone ids. You should specify the phones having the auto_charge=false
 * phone_number - The phone number list separated by semicolon (;). Use the 'all' value to select all phone numbers. Can be used instead of phone_id. You should specify the phones having the auto_charge=false
 */
$params = new ChargeAccountParams();

$params->phone_number = '79993330011';

// Charge the frozen phone number: 79993330011.
$result = $voxApi->Accounts->ChargeAccount($params);

// Show result
var_dump($result);
