<?php

/**
 * @method RemoveSubUserRoles Removes the specified roles of a subuser.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\RemoveSubUserRolesParams;

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
 * subuser_id - The subuser's ID
 * role_id - The role id list separated by semicolons (;)
 * role_name - The role name list separated by semicolons (;)
 * force - Whether to remove roles from all subuser keys
 */
$params = new RemoveSubUserRolesParams();

$params->subuser_id = 12;
$params->role_id = array (
    0 => 1,
    1 => 2,
    2 => 3,
);

// Remove roles 1,2,3 from the subuser with id = 12.
$result = $voxApi->RoleSystem->RemoveSubUserRoles($params);

// Show result
var_dump($result);
