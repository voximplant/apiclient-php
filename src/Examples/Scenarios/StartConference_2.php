<?php

/**
 * @method StartConference Runs a session for video conferencing or joins the existing video conference session.<br/><br/>When a session is created by calling this method, a scenario assigned to the specified **rule_id** will run on one of the servers dedicated to video conferencing. All further method calls with the same **rule_id** won't create a new video conference session, but join the already existing one.<br/><br/>Use the [StartScenarios] method for creating audio conferences.
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
 * rule_id - The rule ID
 * user_id - The user ID. Run the scripts from the user if set
 * user_name - The user name that can be used instead of user_id. Run the scripts from the user if set
 * application_id - The application ID
 * application_name - The application name that can be used instead of application_id
 * script_custom_data - The script custom data (like a script argument). Can be accessed in JS scenario via the VoxEngine.customData() method
 * reference_ip - Specifies the IP from the geolocation of predicted subscribers. It allows selecting the nearest server for serving subscribers
 */
$params = new StartConferenceParams();

$params->conference_name = 'boss';
$params->rule_id = 1;
$params->script_custom_data = 'mystr';
$params->user_id = 1;

// Start the conference from the user 1.
$result = $voxApi->Scenarios->StartConference($params);

// Show result
var_dump($result);
