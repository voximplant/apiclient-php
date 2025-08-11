<?php

/**
 * @method GetKeyValueKeys Gets all the keys of key-value pairs.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetKeyValueKeysParams;

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
 * key - Namespace that keys should contain, up to 200 characters
 * count - Number of items to show per page with a maximum value of 50. Default value is 10
 * offset - Number of items to skip (e.g. if you set count = 20 and offset = 0 the first time, the next time, offset has to be equal to 20 to skip the items shown earlier). Default value is 0
 * application_id - The application ID
 * application_name - The application name
 */
$params = new GetKeyValueKeysParams();

$params->application_id = 1;

// GetKeyValueKeys example.
$result = $voxApi->KeyValueStorage->GetKeyValueKeys($params);

// Show result
var_dump($result);
