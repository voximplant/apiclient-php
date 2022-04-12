<?php

/**
 * @method SetPstnBlackListItem Update the PSTN blacklist item. BlackList works for numbers that are purchased from Voximplant only. Since we have no control over exact phone number format for calls from SIP integrations, blacklisting such numbers should be done via JavaScript scenarios.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetPstnBlackListItemParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * pstn_blacklist_id - The PSTN black list item ID
 * pstn_blacklist_phone - The new phone number in format e164
 */
$params = new SetPstnBlackListItemParams();

$params->pstn_blacklist_phone = '123456789';
$params->pstn_blacklist_id = 1;

$result = $voxApi->PSTNBlacklist->SetPstnBlackListItem($params);

// Show result
var_dump($result);
