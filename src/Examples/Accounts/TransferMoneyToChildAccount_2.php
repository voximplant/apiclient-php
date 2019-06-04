<?php

/**
 * @method TransferMoneyToChildAccount Transfer the parent account's money to the child account or transfer the child's money to the parent account if the money amount is negative.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\TransferMoneyToChildAccountParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * child_account_id - The child account ID list.
 * amount - The money amount, $. The absolute amount value must be equal or greater than 0.01
 */
$params = new TransferMoneyToChildAccountParams();

$params->child_account_id = 1;
$params->amount = -5.67;
$params->amp;currency = 'USD';

// Transfer 5.67 $ from the child account 1 to the parent account.
$result = $voxApi->Accounts->TransferMoneyToChildAccount($params);

// Show result
var_dump($result);
