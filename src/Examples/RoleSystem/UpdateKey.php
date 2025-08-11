<?php

/**
 * @method UpdateKey Updates info of the specified key.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\UpdateKeyParams;

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
 * key_id - The key's ID
 * description - The key's description
 * key_name - The key's name, up to 50 characters. Cannot be empty
 */
$params = new UpdateKeyParams();

$params->key_id = 'ab98c70e-573e-4446-9af9-105269dfafca';
$params->description = 'test_desc';

// Create a new subuser for account_id = 1.
$result = $voxApi->RoleSystem->UpdateKey($params);

// Show result
var_dump($result);
