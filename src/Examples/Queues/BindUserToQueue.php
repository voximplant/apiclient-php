<?php

/**
 * @method BindUserToQueue Bind/unbind users to/from the specified ACD queues. Note that users and queues should be already bound to the same application.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\BindUserToQueueParams;

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
 * user_id - The user ID list or the 'all' value to specify all users bound to the application.
 * acd_queue_name - The queue name that can be used instead of acd_queue_id. The queue name list.
 * bind - Bind or unbind users.
 */
$params = new BindUserToQueueParams();

$params->application_id = 1;
$params->user_id = array (
    0 => 12,
    1 => 987,
    2 => 456,
);
$params->acd_queue_name = 'myqueue';
$params->bind = true;

// Bind three users to one queue.
$result = $voxApi->Queues->BindUserToQueue($params);

// Show result
var_dump($result);
