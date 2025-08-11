<?php

/**
 * @method StartScenarios Runs JavaScript scenarios on a Voximplant server. The scenarios run in a new media session. To start a scenario, pass the routing rule ID associated with the necessary scenario. You can use both GET and POST requests, but we recommend using the POST mode if you pass some data in the custom_data field. The maximum number of simultaneous requests is 200. If you exceed this number, you get the 429 error code.
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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * user_id - The user ID. Run the scripts from the user if set
 * user_name - The user name that can be used instead of user_id. Run the scripts from the user if set
 * application_id - The application ID
 * application_name - The application name that can be used instead of application_id
 * rule_id - The rule ID that needs to be launched. Please note, the necessary scenario needs to be attached to the rule
 * script_custom_data - The script custom data, that can be accessed in the scenario via the VoxEngine.customData() method. Use the application/x-www-form-urlencoded content type with UTF-8 encoding
 * reference_ip - Specifies the IP from the geolocation of predicted subscribers. It allows selecting the nearest server for serving subscribers
 * server_location - Specifies the location of the server where the scenario needs to be executed. Has higher priority than `reference_ip`. Request [getServerLocations](https://api.voximplant.com/getServerLocations) for possible values
 * with_check_url - Whether to get media server session lists url
 */
$params = new StartScenariosParams();

$params->rule_id = 1;
$params->script_custom_data = 'mystr';

// Start the scripts from the account.
$result = $voxApi->Scenarios->StartScenarios($params);

// Show result
var_dump($result);
