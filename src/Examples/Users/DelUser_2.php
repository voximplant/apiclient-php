<?php

/**
 * @method DelUser Deletes the specified user(s).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelUserParams;

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
 * user_id - The user ID list separated by semicolons (;). Use the 'all' value to select all users
 * user_name - The user name list separated by semicolons (;) that can be used instead of user_id
 * application_id - Delete the specified users bound to the application ID. It is required if the user_name is specified
 * application_name - Delete the specified users bound to the application name. Can be used instead of the application_id parameter
 */
$params = new DelUserParams();

$params->user_id = 'all';
$params->application_name = 'myapp1';

// Delete all the users bound to the 'myapp1' application.
$result = $voxApi->Users->DelUser($params);

// Show result
var_dump($result);
