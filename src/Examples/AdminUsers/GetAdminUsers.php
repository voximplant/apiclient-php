<?php

/**
 * @method GetAdminUsers Gets the admin users of the specified account. Note that both account types - parent and child - can have its own admins.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAdminUsersParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * required_admin_user_id - The admin user ID to filter
 * required_admin_user_name - The admin user name part to filter
 * admin_user_display_name - The admin user display name part to filter
 * admin_user_active - Whether the admin user is active to filter
 * with_roles - Whether to get the attached admin roles
 * with_access_entries - Whether to get the admin user permissions
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetAdminUsersParams();

$params->with_access_entries = true;
$params->count = 2;

// Get two first admin users.
$result = $voxApi->AdminUsers->GetAdminUsers($params);

// Show result
var_dump($result);
