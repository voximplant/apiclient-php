<?php

/**
 * @method GetSubUserRoles Gets the subuser's roles.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSubUserRolesParams;

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
 * with_expanded_roles - Show the roles' additional properties
 */
$params = new GetSubUserRolesParams();

$params->subuser_id = 12;

// Get subuser's roles.
$result = $voxApi->RoleSystem->GetSubUserRoles($params);

// Show result
var_dump($result);
