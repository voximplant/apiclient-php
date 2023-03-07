<?php

/**
 * @method SetSipWhiteListItem Edits the SIP white list.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetSipWhiteListItemParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * sip_whitelist_id - The SIP white list item ID
 * sip_whitelist_network - The new network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16)
 * description - The network address description
 */
$params = new SetSipWhiteListItemParams();

$params->sip_whitelist_id = 1;
$params->sip_whitelist_network = '192.168.1.5/16';

$result = $voxApi->SIPWhiteList->SetSipWhiteListItem($params);

// Show result
var_dump($result);
