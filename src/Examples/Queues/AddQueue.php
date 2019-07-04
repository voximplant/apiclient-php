<?php

/**
 * @method AddQueue Adds a new ACD queue.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddQueueParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - The application ID.
 * acd_queue_name - The queue name. The length must be less than 100.
 */
$params = new AddQueueParams();

$params->application_id = 1;
$params->acd_queue_name = 'myqueue';

// Add a new ACD queue for the application 1.
$result = $voxApi->Queues->AddQueue($params);

// Show result
var_dump($result);
