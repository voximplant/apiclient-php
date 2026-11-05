<?php

/**
 * @method GetCustomRecordStorages Gets the custom record storages.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCustomRecordStoragesParams;

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
 * custom_record_storage_id - Unique identifier of the custom record storage configuration.
 * with_applications_attached - Whether to include attached applications in the response or execution.
 */
$params = new GetCustomRecordStoragesParams();


// Get all custom record storages.
$result = $voxApi->RecordStorages->GetCustomRecordStorages($params);

// Show result
var_dump($result);
