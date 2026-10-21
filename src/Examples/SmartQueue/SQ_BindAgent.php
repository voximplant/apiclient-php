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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * application_id - Application ID to search by. Required unless application_name is provided.
 * application_name - Application name to search by. Required unless application_id is provided.
 * sq_queue_id - List of SmartQueue IDs separated by semicolons (;). Use 'all' to select all the queues. Required unless sq_queue_name is provided.
 * sq_queue_name - List of SmartQueue names separated by semicolons (;). Required unless sq_queue_id is provided.
 * user_id - List of user IDs separated by semicolons (;). Use 'all' to select all the users. Required unless user_name is provided.
 * user_name - List of user names separated by semicolons (;). Required unless user_id is provided.
 * bind_mode - Binding mode. Accepts one of the [SQAgentBindingModes] enum values
 */
$params = new SQ_BindAgentParams();

$params->application_id = 1;
$params->sq_queue_id = 1;
$params->user_id = array (
    0 => 1,
    1 => 2,
);

// Bind the agent with id 1 and 2 to the queue with id = 1.
$result = $voxApi->SmartQueue->SQ_BindAgent($params);

// Show result
var_dump($result);
