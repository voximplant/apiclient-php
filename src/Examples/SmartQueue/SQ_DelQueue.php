<?php

/**
 * @method SQ_DelQueue Deletes a queue.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_DelQueueParams;

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
 * sq_queue_id - List of SmartQueue IDs separated by semicolons (;). Use 'all' to delete all the queues. Required unless sq_queue_name is provided.
 * sq_queue_name - List of SmartQueue names separated by semicolons (;). Required unless sq_queue_id is provided.
 */
$params = new SQ_DelQueueParams();

$params->application_id = 1;
$params->sq_queue_id = 3;

// Delete the queue with id = 3.
$result = $voxApi->SmartQueue->SQ_DelQueue($params);

// Show result
var_dump($result);
