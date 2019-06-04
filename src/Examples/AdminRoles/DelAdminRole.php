<?php

/**
 * @method DelAdminRole Deletes the specified admin role.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelAdminRoleParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * admin_role_id - The admin role ID list or the 'all' value.
 */
$params = new DelAdminRoleParams();

$params->admin_role_id = 10;

// Delete the admin role.
$result = $voxApi->AdminRoles->DelAdminRole($params);

// Show result
var_dump($result);
