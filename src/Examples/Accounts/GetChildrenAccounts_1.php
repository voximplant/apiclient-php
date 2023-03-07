<?php

/**
 * @method GetChildrenAccounts Gets the info about all children accounts.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetChildrenAccountsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * child_account_id - The account ID list separated by semicolon (;). Use the 'all' value to select all accounts
 * child_account_name - The child account name part to filter
 * child_account_email - The child ccount email to filter
 * active - The active flag to filter
 * frozen - The frozen flag to filter
 * ignore_invalid_accounts - Set true to ignore the invalid 'child_account_id' items
 * brief_output - Set true to output the account_id only
 * medium_output - Set true to output the account_id, account_name, account_email only
 * count - The max returning record count
 * offset - The first N records will be skipped in the output
 * order_by - The following values are available: 'child_account_id', 'child_account_name' and 'child_account_email'
 * return_live_balance - Set true to get the user live balance
 */
$params = new GetChildrenAccountsParams();


// Get the all children.
$result = $voxApi->Accounts->GetChildrenAccounts($params);

// Show result
var_dump($result);
