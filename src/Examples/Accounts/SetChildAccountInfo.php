<?php

/**
 * @method SetChildAccountInfo Edits the account's profile.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetChildAccountInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * child_account_id - The child account ID list or the 'all' value.
 * active - Set false to disable the child account.
 */
$params = new SetChildAccountInfoParams();

$params->account_password = '1234567';
$params->child_account_id = 1321;
$params->active = false;

// Disable the child account.
$result = $voxApi->Accounts->SetChildAccountInfo($params);

// Show result
var_dump($result);
