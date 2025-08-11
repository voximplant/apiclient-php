<?php

/**
 * @method AddRule Adds a new rule for the application.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddRuleParams;

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
 * application_name - The application name, can be used instead of application_id
 * rule_name - The rule name. The length must be less than 100
 * rule_pattern - The rule pattern regex. The length must be less than 64 KB
 * rule_pattern_exclude - The exclude pattern regex. The length must be less than 64 KB
 * video_conference - Whether video conference is required
 * bind_key_id - The service account ID to bind to the rule. Read more in the [guide](/docs/guides/voxengine/management-api)
 * scenario_id - The scenario ID list separated by semicolons (;)
 * scenario_name - The scenario name list separated by semicolons (;). Can be used instead of scenario_id
 */
$params = new AddRuleParams();

$params->application_id = 1;
$params->rule_name = 'allowall';
$params->rule_pattern = '.*';

// Add a new rule.
$result = $voxApi->Rules->AddRule($params);

// Show result
var_dump($result);
