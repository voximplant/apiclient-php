<?php

/**
 * @method GetCallLists Get all call lists for the specified user.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCallListsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * list_id - The list ID to filter. Can be a list or the 'all' value.
 * name - Find call lists by name
 * is_active - Find only active call lists
 * from_date - The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * type_list - The type of call list. Available values: AUTOMATIC and MANUAL
 * count - The max returning record count.
 * offset - The first N records will be skipped in the output.
 * application_id - The application ID to filter. Can be a list or the 'all' value.
 */
$params = new GetCallListsParams();


// Get all lists registered by user
$result = $voxApi->CallLists->GetCallLists($params);

// Show result
var_dump($result);
