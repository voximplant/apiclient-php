<?php

/**
 * @method GetRecordStorages Gets the record storages.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetRecordStoragesParams;

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
 * record_storage_id - The record storage ID list separated by semicolons (;)
 * record_storage_name - The record storage name list separated by semicolons (;)
 * with_private - Whether to get the private record storages. If set to true, there is the __is_public : bool__ parameter in a response
 */
$params = new GetRecordStoragesParams();

$params->record_storage_name = 'ru1';

// Get the record storage with name = ru1.
$result = $voxApi->RecordStorages->GetRecordStorages($params);

// Show result
var_dump($result);
