<?php

/**
 * @method GetAccountDocuments Gets the account documents and the verification states.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAccountDocumentsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * with_details - Whether to view the uploaded document statuses. (The flag is ignored with the child_account_id=all)
 * verification_name - The required account verification name to filter
 * verification_status - The account verification status list separated by semicolons (;). The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED
 * from_unverified_hold_until - Unverified subscriptions hold until the date (from ...) in format: YYYY-MM-DD
 * to_unverified_hold_until - Unverified subscriptions hold until the date (... to) in format: YYYY-MM-DD
 * child_account_id - The child account ID list separated by semicolons (;). Use the 'all' value to select all child accounts
 * children_verifications_only - Whether to get the children account verifications only
 */
$params = new GetAccountDocumentsParams();

$params->with_details = true;

$result = $voxApi->Accounts->GetAccountDocuments($params);

// Show result
var_dump($result);
