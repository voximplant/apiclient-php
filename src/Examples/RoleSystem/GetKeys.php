<?php

/**
 * @method GetKeys Gets key info of the specified account.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetKeysParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * key_id - The key's ID
 * with_roles - Whether to show roles for the key
 * offset - The first N records are skipped in the output
 * count - The max returning record count
 */
$params = new GetKeysParams();


// Get keys info of the specified account.
$result = $voxApi->RoleSystem->GetKeys($params);

// Show result
var_dump($result);
