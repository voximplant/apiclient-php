<?php

/**
 * @method GetKeyValueItem Gets the specified key-value pair from the storage.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetKeyValueItemParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * key - Key, up to 200 characters
 * application_id - The application ID
 * application_name - The application name
 */
$params = new GetKeyValueItemParams();

$params->application_id = 1;
$params->key = 'key1';

// GetKeyValueItem example.
$result = $voxApi->KeyValueStorage->GetKeyValueItem($params);

// Show result
var_dump($result);
