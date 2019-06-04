<?php

/**
 * @method StartScenarios Run the JavaScript scenarios on a VoxImplant server. The scenarios run in a new media session.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\StartScenariosParams;

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
 * script_custom_data - The script custom data (like a script argument). Can be accessed in JS scenario via the VoxEngine.customData() method
 */
$params = new StartScenariosParams();

$params->rule_id = 1;
$params->script_custom_data = 'mystr';

// Start the scripts from the account.
$result = $voxApi->Scenarios->StartScenarios($params);

// Show result
var_dump($result);
