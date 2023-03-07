<?php

/**
 * @method SetKeyRoles Set roles for the specified key.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetKeyRolesParams;

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
 * role_id - The role id list separated by semicolon (;)
 * role_name - The role name list separated by semicolon (;)
 */
$params = new SetKeyRolesParams();

$params->key_id = 'ab81c76e-573e-4046-9af9-105269dfafca';
$params->role_id = array (
    0 => 1,
    1 => 2,
    2 => 3,
);

// Set roles 1, 2, 3 for the key.
$result = $voxApi->RoleSystem->SetKeyRoles($params);

// Show result
var_dump($result);
