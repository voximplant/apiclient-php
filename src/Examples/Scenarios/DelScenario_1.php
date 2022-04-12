<?php

/**
 * @method DelScenario Deletes the scenario.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelScenarioParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * scenario_id - The scenario ID list. Use the 'all' value to select all scenarios
 * scenario_name - The scenario name list. Can be used instead of scenario_id
 */
$params = new DelScenarioParams();

$params->scenario_id = array (
    0 => 1,
    1 => 3,
);

// Delete the scenario 1 and 3.
$result = $voxApi->Scenarios->DelScenario($params);

// Show result
var_dump($result);
