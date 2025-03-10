<?php

/**
 * @method SQ_BindAgent Binds agents to a queue.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_BindAgentParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - ID of the application to search by
 * application_name - Name of the application to search by. Can be used instead of application_id
 * sq_queue_id - ID of the SmartQueue. Pass a list of values divided by ; or the "all" keyword
 * sq_queue_name - Name of the SmartQueue. Pass a list of names divided by ; or the "all" keyword
 * user_id - List of user IDs separated by semicolons (;). Use 'all' to select all the users
 * user_name - List of user names separated by semicolons (;). Can be used instead of user_id
 * bind_mode - Binding mode. Accepts one of the [SQAgentBindingModes] enum values
 */
$params = new SQ_BindAgentParams();

$params->application_id = 1;
$params->sq_queue_id = '1';
$params->user_id = array (
    0 => 1,
    1 => 2,
);

// Bind the agent with id 1 and 2 to the queue with id = 1.
$result = $voxApi->SmartQueue->SQ_BindAgent($params);

// Show result
var_dump($result);
