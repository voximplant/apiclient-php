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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * child_account_id - The account ID list separated by semicolons (;). You need to specify at least one of the following parameters: `child_account_id`, `child_account_name`, `child_account_email`
 * child_account_name - The child account name to filter. You need to specify at least one of the following parameters: `child_account_id`, `child_account_name`, `child_account_email`
 * child_account_email - The child account email to filter. You need to specify at least one of the following parameters: `child_account_id`, `child_account_name`, `child_account_email`
 * active - Whether the filter is active
 * frozen - Whether the filter is frozen
 * ignore_invalid_accounts - Whether to ignore the invalid 'child_account_id' items
 * brief_output - Whether to output the account_id only
 * medium_output - Whether to output the account_id, account_name, account_email only
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 * order_by - The following values are available: 'child_account_id', 'child_account_name' and 'child_account_email'
 * return_live_balance - Whether to get the user live balance
 */
$params = new GetChildrenAccountsParams();

$params->child_account_email = 'mychild@gmail.com';

// Get the particular child.
$result = $voxApi->Accounts->GetChildrenAccounts($params);

// Show result
var_dump($result);
