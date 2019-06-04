<?php

/**
 * @method AddAdminRole Adds a new admin role.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddAdminRoleParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * admin_role_name - The admin role name. The length must be less than 50.
 * allowed_entries - The list of allowed access entries (the API function names).
 */
$params = new AddAdminRoleParams();

$params->admin_role_name = 'read_only';
$params->allowed_entries = array (
    0 => 'GetAccountInfo',
    1 => 'GetCallHistory',
);

// Add a new admin role with the GetAccountInfo and GetCallHistory permissions.
$result = $voxApi->AdminRoles->AddAdminRole($params);

// Show result
var_dump($result);
