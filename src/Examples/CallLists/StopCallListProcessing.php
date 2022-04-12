<?php

/**
 * @method StopCallListProcessing Stop processing the specified call list.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\StopCallListProcessingParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * list_id - The list Id
 */
$params = new StopCallListProcessingParams();

$params->list_id = 1;

// Cancel list with id = 1.
$result = $voxApi->CallLists->StopCallListProcessing($params);

// Show result
var_dump($result);
