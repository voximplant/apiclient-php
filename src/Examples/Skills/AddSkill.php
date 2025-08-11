<?php

/**
 * @method AddSkill Adds a new operator's skill. Works only for ACDv1. For SmartQueue/ACDv2, use <a href="#how-auth-works">this reference</a>.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddSkillParams;

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
 * skill_name - The ACD operator skill name. The length must be less than 512
 */
$params = new AddSkillParams();

$params->skill_name = 'English';

// Add a new skill.
$result = $voxApi->Skills->AddSkill($params);

// Show result
var_dump($result);
