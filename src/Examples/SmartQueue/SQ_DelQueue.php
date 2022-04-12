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

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - ID of the application to search by
 * application_name - Name of the application to search by. Can be used instead of application_id
 * sq_queue_id - List of smart queue IDs. Use 'all' to delete all the queues
 * sq_queue_name - List of smart queue names. Can be used instead of sq_queue_id
 */
$params = new SQ_DelQueueParams();

$params->application_id = 1;
$params->sq_queue_id = 3;

// Delete the queue with id = 3.
$result = $voxApi->SmartQueue->SQ_DelQueue($params);

// Show result
var_dump($result);
