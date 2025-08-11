<?php

/**
 * @method GetPstnBlackList Get the whole PSTN blacklist.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetPstnBlackListParams;

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
 * pstn_blacklist_id - The PSTN black list item ID for filter
 * pstn_blacklist_phone - The phone number in format e164 for filter
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetPstnBlackListParams();


$result = $voxApi->PSTNBlacklist->GetPstnBlackList($params);

// Show result
var_dump($result);
