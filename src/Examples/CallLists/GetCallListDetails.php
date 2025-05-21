<?php

/**
 * @method GetCallListDetails Gets details of the specified call list. Returns a CSV file by default.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCallListDetailsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * list_id - The list ID
 * count - Maximum number of entries in the result
 * offset - The first N records are skipped in the output
 * output - The output format. The following values available: **json**, **csv**, **xls**. The default value is **csv**
 * encoding - Encoding of the output file. Default UTF-8
 * delimiter - Separator values. The default value is ';'
 */
$params = new GetCallListDetailsParams();

$params->list_id = 1;
$params->output = 'json';

// Get all lists registered by user.
$result = $voxApi->CallLists->GetCallListDetails($params);

// Show result
var_dump($result);
