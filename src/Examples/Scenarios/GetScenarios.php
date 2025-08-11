<?php

/**
 * @method GetScenarios Gets the account's scenarios.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetScenariosParams;

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
 * scenario_id - The scenario ID to filter
 * scenario_name - The scenario name to filter. Can be used instead of scenario_id. All scenarios containing this param in their names are returned. The parameter is case insensitive
 * with_script - Whether to get the scenario text. You must specify the 'scenario_id' too!
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 * application_id - ID of the scenario's application
 * application_name - Name of the scenario's application
 */
$params = new GetScenariosParams();

$params->offset = 1;
$params->count = 2;

// Get two scenarios, but skip the first one.
$result = $voxApi->Scenarios->GetScenarios($params);

// Show result
var_dump($result);
