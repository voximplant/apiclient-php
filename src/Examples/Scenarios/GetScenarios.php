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

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * scenario_id - The scenario ID to filter
 * scenario_name - The scenario name to filter. Can be used instead of scenario_id. All scenarios containing this param in their names will be returned. The parameter is case insensitive.
 * with_script - Set true to get the scenario text. You must specify the 'scenario_id' too!
 * count - The max returning record count.
 * offset - The first N records will be skipped in the output.
 */
$params = new GetScenariosParams();

$params->offset = 1;
$params->count = 2;

// Get two scenarios, but skip the first one.
$result = $voxApi->Scenarios->GetScenarios($params);

// Show result
var_dump($result);
