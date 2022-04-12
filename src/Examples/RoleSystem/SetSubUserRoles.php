<?php

/**
 * @method SetSubUserRoles Adds the specified roles for a subuser.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetSubUserRolesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * subuser_id - The subuser's ID
 * role_id - The role id list
 * role_name - The role name list
 */
$params = new SetSubUserRolesParams();

$params->subuser_id = 12;
$params->role_id = array (
    0 => 1,
    1 => 2,
    2 => 3,
);

// Add the roles 1, 2, 3 to the subuser with id = 12.
$result = $voxApi->RoleSystem->SetSubUserRoles($params);

// Show result
var_dump($result);
