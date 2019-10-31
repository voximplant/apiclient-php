<?php

/**
 * @method DownloadAgreement Downloads Agreement in PDF format
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DownloadAgreementParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * document_id - The ID of the account document, based on which the agreement document will be constructed.
 */
$params = new DownloadAgreementParams();

$params->output = 'pdf';
$params->document_id = 48;

// Downloads agreement with account document id = 48
$result = $voxApi->Agreements->DownloadAgreement($params);

// Show result
var_dump($result);
