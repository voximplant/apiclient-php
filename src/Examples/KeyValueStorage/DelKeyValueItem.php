<?php

/**
 * @method DelKeyValueItem Deletes the specified key-value pair from the storage.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelKeyValueItemParams;

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
 * key - Key, up to 200 characters
 * application_id - The application ID
 * application_name - The application name
 */
$params = new DelKeyValueItemParams();

$params->application_id = 1;
$params->key = 'key1';

// DelKeyValueItem example.
$result = $voxApi->KeyValueStorage->DelKeyValueItem($params);

// Show result
var_dump($result);
