<?php

/**
 * @method StartConference Runs a session for video conferencing or joins the existing video conference session.<br/><br/>When you create a session by calling this method, a scenario runs on one of the servers dedicated to video conferencing. All further method calls with the same **conference_name** won't create a new video conference session but join the existing one.<br/><br/>Use the [StartScenarios] method for creating audio conferences.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\StartConferenceParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * conference_name - The conference name. The name length must be less than 50 symbols
 * rule_id - The rule ID that needs to be launched. Please note, the necessary scenario needs to be attached to the rule
 * user_id - The user ID. Run the scripts from the user if set
 * user_name - The user name that can be used instead of user_id. Run the scripts from the user if set
 * application_id - The application ID
 * application_name - The application name that can be used instead of application_id
 * script_custom_data - The script custom data, that can be accessed in the scenario via the VoxEngine.customData() method. Use the application/x-www-form-urlencoded content type with UTF-8 encoding.
 * reference_ip - Specifies the IP from the geolocation of predicted subscribers. It allows selecting the nearest server for serving subscribers
 */
$params = new StartConferenceParams();

$params->conference_name = 'boss';
$params->rule_id = 1;
$params->script_custom_data = 'mystr';

// Start the conference from the account.
$result = $voxApi->Scenarios->StartConference($params);

// Show result
var_dump($result);
