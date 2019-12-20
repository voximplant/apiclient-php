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
 * currency - The amount currency (the parent account currency by default). Examples: RUR, EUR, USD.
 * strict_mode - Returns error if strict_mode is true and an child account or the parent account hasn't enough money.
 * child_transaction_description - The child account transaction description.
 * parent_transaction_description - The parent account transaction description. The following macro available: ${child_account_id}, ${child_account_name}
 * payment_reference - The external payment reference (extra info).
 * check_duplicate_reference_from - Specify the date in 24-h format: YYYY-MM-DD HH:mm:ss to skip the duplicate transaction.
 */
$params = new TransferMoneyToChildAccountParams();

$params->child_account_id = 1;
$params->amount = -5.67;
$params->currency = 'USD';

// Transfer 5.67 $ from the child account 1 to the parent account.
$result = $voxApi->Accounts->TransferMoneyToChildAccount($params);

// Show result
var_dump($result);
