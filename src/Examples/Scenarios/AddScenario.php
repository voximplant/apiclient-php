<?php

/**
 * @method AddScenario Adds a new scenario to the <a href="https://voximplant.com/docs/gettingstarted/basicconcepts/scenarios#shared-scenarios">Shared</a> folder, so the scenario is available in all the existing applications. Please use the POST method.
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
 * scenario_script - The scenario text. Use the application/x-www-form-urlencoded content type with UTF-8 encoding. The length must be less than 128 KB
 * rule_id - The rule ID. The new scenario binds to the specified rule. Please note, if you do not bind the scenario to any rule, you cannot execute the scenario
 * rule_name - The rule name that can be used instead of rule_id
 * rewrite - Whether to rewrite the existing scenario
 * application_id - ID of the application to bind the scenario to
 * application_name - Name of the application to bind the scenario to
 */
$params = new AddScenarioParams();

$params->scenario_name = 'call_scenario';
$params->scenario_script = 'var s="hello";';

// Add a new scenario: var s='hello';
$result = $voxApi->Scenarios->AddScenario($params);

// Show result
var_dump($result);
