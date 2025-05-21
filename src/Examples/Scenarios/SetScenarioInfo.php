<?php

/**
 * @method SetScenarioInfo Edits the scenario. You can edit the scenario's name and body. Please use the POST method.
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
 * scenario_id - Scenario ID
 * required_scenario_name - Name of the scenario to edit, can be used instead of scenario_id
 * scenario_name - New scenario name. The length must be less than 30
 * scenario_script - New scenario text. Use the application/x-www-form-urlencoded content type with UTF-8 encoding. The length must be less than 128 KB
 */
$params = new SetScenarioInfoParams();

$params->scenario_id = 1;
$params->scenario_name = 'call_scenario';
$params->scenario_script = 'var s="hello world";';

// Add a new scenario: var s='hello';
$result = $voxApi->Scenarios->SetScenarioInfo($params);

// Show result
var_dump($result);
