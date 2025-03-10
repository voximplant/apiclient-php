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

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * rule_id - The rule ID list separated by semicolons (;). Use the 'all' value to select all rules
 * rule_name - The rule name list separated by semicolons (;). Can be used instead of rule_id
 * application_id - The application ID list separated by semicolons (;). Use the 'all' value to select all applications
 * application_name - The application name list separated by semicolons (;). Can be used instead of application_id
 */
$params = new DelRuleParams();

$params->rule_id = 'all';
$params->application_id = 1;

// Delete the all rules from the application 1.
$result = $voxApi->Rules->DelRule($params);

// Show result
var_dump($result);
