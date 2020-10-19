<?php

/**
 * @method AddScenario Adds a new scenario. Please use the POST method.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddScenarioParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * scenario_name - The scenario name. The length must be less than 30
 * scenario_script - The scenario text. The length must be less than 128 KB.
 * rule_id - The rule ID.
 * rule_name - The rule name that can be used instead of rule_id.
 * rewrite - Rewrite the existing scenario.
 */
$params = new AddScenarioParams();

$params->scenario_name = 'call_scenario';
$params->scenario_script = 'var s="hello";';

// Add a new scenario: var s='hello';
$result = $voxApi->Scenarios->AddScenario($params);

// Show result
var_dump($result);
