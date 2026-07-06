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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * bind - Whether to bind or unbind users
 * application_id - The application ID. Required unless application_name is provided.
 * application_name - The application name. Required unless application_id is provided.
 * user_id - The user ID list separated by semicolons (;). Use the 'all' value to specify all users bound to the application. Required unless user_name is provided.
 * user_name - The user name list separated by semicolons (;). Required unless user_id is provided.
 * acd_queue_id - The ACD queue ID list separated by semicolons (;). Use the 'all' value to specify all queues bound to the application. Required unless acd_queue_name is provided.
 * acd_queue_name - The queue name. The queue name list separated by semicolons (;). Required unless acd_queue_id is provided.
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
