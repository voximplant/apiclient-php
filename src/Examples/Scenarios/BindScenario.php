<?php

/**
 * @method BindScenario Bind the scenario list to the rule. You should specify the application_id or application_name if you specify the rule_name. Please note, the scenario and the routing rule need to be within the same application.
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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * scenario_id - The scenario ID list separated by semicolons (;)
 * scenario_name - The scenario name list separated by semicolons (;). Can be used instead of scenario_id
 * rule_id - The rule ID to bind the scenario. The rule and the scenario need to be in the same application
 * rule_name - The rule name that can be used instead of rule_id
 * application_id - The application ID
 * application_name - The application name that can be used instead of application_id
 * bind - Whether to bind or unbind (set true or false respectively)
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
