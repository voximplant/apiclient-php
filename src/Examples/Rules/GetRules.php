<?php

/**
 * @method GetRules Gets the rules.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetRulesParams;

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
 * application_id - The application ID
 * application_name - The application name that can be used instead of application_id
 * rule_id - The rule ID to filter
 * rule_name - The rule name part to filter
 * video_conference - Whether it is a video conference to filter
 * attached_key_id - The service account ID bound to the rule. Read more in the [guide](/docs/guides/voxengine/management-api)
 * template - Search for template matching
 * with_scenarios - Whether to get bound scenarios info
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetRulesParams();

$params->application_id = 1;
$params->template = '74951234567';
$params->with_scenarios = true;
$params->count = 1;

// Get the first rule for the template 74951234567.
$result = $voxApi->Rules->GetRules($params);

// Show result
var_dump($result);
