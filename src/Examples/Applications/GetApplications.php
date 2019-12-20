<?php

/**
 * @method GetApplications Gets the account's applications.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetApplicationsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - The application ID to filter.
 * application_name - The application name part to filter.
 * user_id - The user ID to filter.
 * excluded_user_id - The excluded user ID to filter.
 * showing_user_id - Specify the user ID value to show it in the 'users' array output.
 * with_rules - Set true to get bound rules info.
 * with_scenarios - Set true to get bound rules and scenarios info.
 * count - The max returning record count.
 * offset - The first N records will be skipped in the output.
 */
$params = new GetApplicationsParams();

$params->offset = 1;
$params->count = 2;

// Get two applications, but skip the first one.
$result = $voxApi->Applications->GetApplications($params);

// Show result
var_dump($result);
