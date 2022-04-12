<?php

/**
 * @method SetRuleInfo Edits the rule.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetRuleInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * rule_id - The rule ID
 * rule_name - The new rule name. The length must be less than 100
 * rule_pattern - The new rule pattern regex. The length must be less than 64 KB
 * rule_pattern_exclude - The new exclude pattern regex. The length must be less than 64 KB
 * video_conference - Video conference is required
 */
$params = new SetRuleInfoParams();

$params->rule_id = 1;
$params->rule_name = 'denyall';
$params->rule_pattern_exclude = '.*';

// Deny all.
$result = $voxApi->Rules->SetRuleInfo($params);

// Show result
var_dump($result);
