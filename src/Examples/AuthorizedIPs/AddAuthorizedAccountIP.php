<?php

/**
 * @method AddAuthorizedAccountIP Adds a new authorized IP4 or network to the white/black list.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddAuthorizedAccountIPParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * authorized_ip - The authorized IP4 or network
 * allowed - Set false to add the IP to the blacklist
 * description - The IP address description
 */
$params = new AddAuthorizedAccountIPParams();

$params->authorized_ip = '92.255.220.0/24';

// Add the 92.255.220.0/24 network to the white list.
$result = $voxApi->AuthorizedIPs->AddAuthorizedAccountIP($params);

// Show result
var_dump($result);
