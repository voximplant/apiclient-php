<?php

/**
 * @method RemoveKeyRoles Removes the specified roles of a key.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\RemoveKeyRolesParams;

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
 * role_id - The role id list
 * role_name - The role name list
 */
$params = new RemoveKeyRolesParams();

$params->key_id = 'ab81c90e-543e-4446-9af9-105269dfafca';
$params->role_id = array (
    0 => 1,
    1 => 2,
    2 => 3,
);

// Remove the roles 1, 2, 3 from the key.
$result = $voxApi->RoleSystem->RemoveKeyRoles($params);

// Show result
var_dump($result);
