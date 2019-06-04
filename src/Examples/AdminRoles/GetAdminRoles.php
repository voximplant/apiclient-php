<?php

/**
 * @method GetAdminRoles Gets the admin roles.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAdminRolesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * with_entries - Set true to get the permissions.
 * showing_admin_user_id - The admin user to show in the 'admin_users' field output.
 * included_admin_user_id - The attached admin user ID list or the 'all' value.
 * count - The max returning record count.
 */
$params = new GetAdminRolesParams();

$params->with_entries = true;
$params->showing_admin_user_id = 11;
$params->included_admin_user_id = 22;
$params->count = 2;

// Get two admin roles attached to the admin_user_id=22.
$result = $voxApi->AdminRoles->GetAdminRoles($params);

// Show result
var_dump($result);
