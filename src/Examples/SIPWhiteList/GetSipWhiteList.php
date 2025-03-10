<?php

/**
 * @method GetSipWhiteList Gets the SIP white list.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSipWhiteListParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * sip_whitelist_id - The SIP white list item ID to filter
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetSipWhiteListParams();

$params->offset = 1;
$params->count = 2;

// Get two networks, but skip the first one.
$result = $voxApi->SIPWhiteList->GetSipWhiteList($params);

// Show result
var_dump($result);
