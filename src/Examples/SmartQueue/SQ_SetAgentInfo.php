<?php

/**
 * @method SQ_SetAgentInfo Edits the agent settings.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_SetAgentInfoParams;

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
 * application_id - ID of the application to search by
 * application_name - Name of the application to search by. Can be used instead of application_id
 * user_id - List of user IDs separated by semicolons (;). Use 'all' to select all the users
 * user_name - List of user names separated by semicolons (;). Can be used instead of user_id
 * max_simultaneous_conversations - Maximum number of chats that the user processes simultaneously
 * handle_calls - Whether the agent can handle calls. When set to false, the agent is excluded from the CALL-request distribution
 */
$params = new SQ_SetAgentInfoParams();

$params->application_id = 1;
$params->user_id = 2;
$params->handle_calls = true;

// Edit settings of the agent with id = 2.
$result = $voxApi->SmartQueue->SQ_SetAgentInfo($params);

// Show result
var_dump($result);
