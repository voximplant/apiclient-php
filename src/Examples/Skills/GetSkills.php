<?php

/**
 * @method GetSkills Gets the skills of an operator. Works only for ACDv1. For SmartQueue/ACDv2, use <a href="#how-auth-works">this reference</a>.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSkillsParams;

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
 * skill_id - The skill ID to filter
 * skill_name - The skill name part to filter
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetSkillsParams();

$params->offset = 1;
$params->count = 2;

// Get two skills, but skip the first one.
$result = $voxApi->Skills->GetSkills($params);

// Show result
var_dump($result);
