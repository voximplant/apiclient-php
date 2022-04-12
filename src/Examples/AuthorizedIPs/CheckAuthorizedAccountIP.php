<?php

/**
 * @method CheckAuthorizedAccountIP Tests whether the IP4 is banned or allowed.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\CheckAuthorizedAccountIPParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * authorized_ip - The IP4 to test
 */
$params = new CheckAuthorizedAccountIPParams();

$params->authorized_ip = '92.255.220.0/24';

$result = $voxApi->AuthorizedIPs->CheckAuthorizedAccountIP($params);

// Show result
var_dump($result);
