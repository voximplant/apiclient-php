<?php

/**
 * @method GetUsers Shows the users of the specified account.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetUsersParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - The application ID to filter
 * application_name - The application name part to filter
 * skill_id - The skill ID to filter
 * excluded_skill_id - The excluded skill ID to filter
 * acd_queue_id - The ACD queue ID to filter
 * excluded_acd_queue_id - The excluded ACD queue ID to filter
 * user_id - The user ID to filter
 * user_name - The user name part to filter
 * user_active - The user active flag to filter
 * user_display_name - The user display name part to filter
 * with_skills - Set true to get the bound skills
 * with_queues - Set true to get the bound queues
 * acd_status - The ACD status list to filter. The following values are possible: OFFLINE, ONLINE, READY, BANNED, IN_SERVICE, AFTER_SERVICE, TIMEOUT, DND
 * showing_skill_id - The skill to show in the 'skills' field output
 * count - The max returning record count
 * offset - The first N records will be skipped in the output
 * order_by - The following values are available: 'user_id', 'user_name' and 'user_display_name'
 * return_live_balance - Set true to get the user live balance
 */
$params = new GetUsersParams();

$params->application_id = 1;
$params->count = 2;

// Get two first identities.
$result = $voxApi->Users->GetUsers($params);

// Show result
var_dump($result);
