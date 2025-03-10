<?php

/**
 * @method AddPstnBlackListItem Add a new phone number to the PSTN blacklist. Use blacklist to block incoming calls from specified phone numbers to numbers purchased from Voximplant. Since we have no control over exact phone number format for calls from SIP integrations, blacklisting such numbers should be done via JavaScript scenarios.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddPstnBlackListItemParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * pstn_blacklist_phone - The phone number in format e164 or regex pattern
 */
$params = new AddPstnBlackListItemParams();

$params->pstn_blacklist_phone = '123456789';

$result = $voxApi->PSTNBlacklist->AddPstnBlackListItem($params);

// Show result
var_dump($result);
