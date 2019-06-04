<?php

/**
 * @method BindScenario Bind the scenario list to the rule. You should specify the application_id or application_name if you specify the rule_name.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\BindScenarioParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * scenario_id - The scenario ID list.
 * rule_id - The rule ID.
 */
$params = new BindScenarioParams();

$params->scenario_id = array (
    0 => 1,
    1 => 2,
    2 => 3,
);
$params->rule_id = 1;

// Bind the scenarios 1, 2 and 3 with the rule 1.
$result = $voxApi->Scenarios->BindScenario($params);

// Show result
var_dump($result);
