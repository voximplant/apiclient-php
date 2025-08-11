<?php

/**
 * @method GetAccountInvoices Gets all invoices for the specified USD or EUR account.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAccountInvoicesParams;

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
 * status - Status to filter invoices. Possible values: new, taxed, accepted, committed, cancelled, numbered
 * count - Number of invoices to show per page. Default value is 20
 * offset - Number of invoices to skip (e.g. if you set count = 20 and offset = 0 the first time, the next time, offset has to be equal to 20 to skip the items shown earlier). Default value is 0
 */
$params = new GetAccountInvoicesParams();


// GetAccountInvoices example.
$result = $voxApi->Invoices->GetAccountInvoices($params);

// Show result
var_dump($result);
