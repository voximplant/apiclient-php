<?php

/**
 * @method StartScenarios Runs JavaScript scenarios on a Voximplant server. The scenarios run in a new media session.
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
 * user_id - The user ID. Run the scripts from the user if set.
 * user_name - The user name that can be used instead of user_id. Run the scripts from the user if set.
 * application_id - The application ID.
 * application_name - The application name that can be used instead of application_id.
 * rule_id - The rule ID.
 * script_custom_data - The script custom data (like a script argument). Can be accessed in JS scenario via the VoxEngine.customData() method
 * reference_ip - Specifies the IP from the geolocation of predicted subscribers. It allows selecting the nearest server for serving subscribers.
 * with_check_url - Set true to get media server session lists url.
 */
$params = new StartScenariosParams();

$params->rule_id = 1;
$params->script_custom_data = 'mystr';

// Start the scripts from the account.
$result = $voxApi->Scenarios->StartScenarios($params);

// Show result
var_dump($result);
