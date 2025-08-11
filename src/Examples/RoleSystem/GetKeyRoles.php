<?php

/**
 * @method GetKeyRoles Gets roles of the specified key.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetKeyRolesParams;

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
 * with_expanded_roles - Whether to show the roles' additional properties
 */
$params = new GetKeyRolesParams();

$params->key_id = 'ab81c50e-573e-4446-9af9-105269dfafca';

// Get roles of the key.
$result = $voxApi->RoleSystem->GetKeyRoles($params);

// Show result
var_dump($result);
