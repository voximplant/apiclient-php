<?php

/**
 * @method GetResourcePrice Gets the resource price.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetResourcePriceParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * resource_type - The resource type list. The possible values are: ASR, AUDIORECORD, PSTN_IN_GB, PSTN_IN_GEOGRAPHIC, PSTN_IN_RU, PSTN_IN_RU_TOLLFREE, PSTN_IN_US, PSTN_IN_US_TF, PSTNOUT, SIPOUT, SIPOUTVIDEO, VOIPIN, VOIPOUT, VOIPOUTVIDEO
 */
$params = new GetResourcePriceParams();

$params->resource_type = array (
    0 => 'VOIPIN',
    1 => 'VOIPOUT',
);

$result = $voxApi->Accounts->GetResourcePrice($params);

// Show result
var_dump($result);
