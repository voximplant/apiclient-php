<?php

/**
 * @method DelRule Deletes the rule.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelRuleParams;

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
 * rule_id - The rule ID list separated by semicolons (;). Use the 'all' value to select all rules. Required unless rule_name is provided.
 * rule_name - The rule name list separated by semicolons (;). Required unless rule_id is provided.
 * application_id - The application ID list separated by semicolons (;). Use the 'all' value to select all applications. Required unless application_name is provided.
 * application_name - The application name list separated by semicolons (;). Required unless application_id is provided.
 */
$params = new DelRuleParams();

$params->rule_id = 'all';
$params->application_id = 1;

// Delete the all rules from the application 1.
$result = $voxApi->Rules->DelRule($params);

// Show result
var_dump($result);
