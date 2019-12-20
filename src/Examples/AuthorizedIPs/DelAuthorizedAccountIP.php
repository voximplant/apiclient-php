<?php

/**
 * @method DelAuthorizedAccountIP Removes the authorized IP4 or network from the white/black list.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelAuthorizedAccountIPParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * authorized_ip - The authorized IP4 or network to remove. Set to 'all' to remove all items.
 * contains_ip - Can be used instead of autharized_ip. Specify the parameter to remove the networks that contains the particular IP4.
 * allowed - Set true to remove the network from the white list. Set false to remove the network from the black list. Omit the parameter to remove the network from all lists.
 */
$params = new DelAuthorizedAccountIPParams();

$params->authorized_ip = '92.255.220.0/24';

// Delete the 92.255.220.0/24 network from all the lists.
$result = $voxApi->AuthorizedIPs->DelAuthorizedAccountIP($params);

// Show result
var_dump($result);
