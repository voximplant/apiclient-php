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
 * application_id - The application ID
 * application_name - The application name that can be used instead of application_id
 * acd_queue_name - The queue name. The length must be less than 100
 * acd_queue_priority - The integer queue priority. The highest priority is 0
 * auto_binding - Whether to enable the auto binding of operators to a queue by skills comparing
 * service_probability - The value in the range of [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue
 * max_queue_size - The max queue size
 * max_waiting_time - The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time
 * average_service_time - The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction
 */
$params = new AddQueueParams();

$params->application_id = 1;
$params->acd_queue_name = 'myqueue';

// Add a new ACD queue for the application 1.
$result = $voxApi->Queues->AddQueue($params);

// Show result
var_dump($result);
