<?php

/**
 * @method SetScenarioInfo Edits the scenario. Please use the POST method.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetScenarioInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * scenario_id - The scenario ID.
 * required_scenario_name - The name of the scenario to edit, can be used instead of scenario_id.
 * scenario_name - The new scenario name. The length must be less than 30
 * scenario_script - The new scenario text. The length must be less than 128 KB.
 */
$params = new SetScenarioInfoParams();

$params->scenario_id = 1;
$params->scenario_name = 'scen11';
$params->scenario_script = 'var s="hello world";';

// Add a new scenario: var s='hello';
$result = $voxApi->Scenarios->SetScenarioInfo($params);

// Show result
var_dump($result);
