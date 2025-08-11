<?php

/**
 * @method DeleteRecord Try to remove a record and transcription files.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DeleteRecordParams;

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
 * record_url - The record URL to remove. You can retrieve the record URL via the CallSessionInfoType.records method
 * record_id - The record ID to remove. You can retrieve the record ID via the CallSessionInfoType.records method
 */
$params = new DeleteRecordParams();

$params->record_id = 1;

// Try remove link with record_id is 1.
$result = $voxApi->History->DeleteRecord($params);

// Show result
var_dump($result);
