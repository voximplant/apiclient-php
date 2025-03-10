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
 * application_id - The application ID to filter
 * application_name - The application name part to filter
 * with_rules - Whether to get bound rules info
 * with_scenarios - Whether to get bound rules and scenarios info
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetApplicationsParams();

$params->offset = 1;
$params->count = 2;

// Get two applications, but skip the first one.
$result = $voxApi->Applications->GetApplications($params);

// Show result
var_dump($result);
