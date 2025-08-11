<?php

/**
 * @method SQ_UnbindAgent Unbinds agents from queues.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_UnbindAgentParams;

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
 * sq_queue_id - List of SmartQueue IDs separated by semicolons (;). Use 'all' to select all the queues
 * sq_queue_name - List of SmartQueue names separated by semicolons (;). Can be used instead of sq_queue_id
 * user_id - List of user IDs separated by semicolons (;). Use 'all' to select all the users
 * user_name - List of user names separated by semicolons (;). Can be used instead of user_id
 */
$params = new SQ_UnbindAgentParams();

$params->application_id = 1;
$params->sq_queue_id = 'all';
$params->user_id = 1;

// Unbind the agent with id 1 from all queues.
$result = $voxApi->SmartQueue->SQ_UnbindAgent($params);

// Show result
var_dump($result);
