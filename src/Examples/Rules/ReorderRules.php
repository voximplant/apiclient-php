<?php

/**
 * @method ReorderRules Configures the rules' order in the <a href='//manage.voximplant.com/applications'>Applications</a> section of Control panel. Note: the rules must belong to the same application!
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\ReorderRulesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * rule_id - The rule ID list.
 */
$params = new ReorderRulesParams();

$params->rule_id = array (
    0 => 1,
    1 => 7,
    2 => 3,
);

// Set the rule selection order: 1, 7, 3
$result = $voxApi->Rules->ReorderRules($params);

// Show result
var_dump($result);
