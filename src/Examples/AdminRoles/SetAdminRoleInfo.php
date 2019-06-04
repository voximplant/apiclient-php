<?php

/**
 * @method SetAdminRoleInfo Edits the specified admin role.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetAdminRoleInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * admin_role_id - The admin role to edit.
 * entry_modification_mode - The modification mode of the permission lists (allowed_entries and denied_entries). The following values are possible: add, del, set.
 * allowed_entries - The list of allowed access entry changes (the API function names).
 * denied_entries - The list of denied access entry changes (the API function names).
 */
$params = new SetAdminRoleInfoParams();

$params->admin_role_id = 1;
$params->entry_modification_mode = 'set';
$params->allowed_entries = 'all';
$params->denied_entries = array (
    0 => 'DelUser',
    1 => 'DelApplication',
);

// Allow the all permissions except the DelUser and DelApplication.
$result = $voxApi->AdminRoles->SetAdminRoleInfo($params);

// Show result
var_dump($result);
