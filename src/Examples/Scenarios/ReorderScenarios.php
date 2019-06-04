<?php

/**
 * @method ReorderScenarios Configures the order of the rules that are assigned to the specified rule.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\ReorderScenariosParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * rule_id - The rule ID.
 * scenario_id - The scenario ID list.
 */
$params = new ReorderScenariosParams();

$params->rule_id = 2;
$params->scenario_id = array (
    0 => 17,
    1 => 15,
    2 => 20,
);

// Set the scenario loading order: 17, 15, 20.
$result = $voxApi->Scenarios->ReorderScenarios($params);

// Show result
var_dump($result);
