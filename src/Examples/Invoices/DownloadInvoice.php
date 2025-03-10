<?php

/**
 * @method DownloadInvoice Downloads the specified invoice.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DownloadInvoiceParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * invoice_id - Invoice ID
 */
$params = new DownloadInvoiceParams();

$params->invoice_id = 1;

// Download the invoice with id = 1.
$result = $voxApi->Invoices->DownloadInvoice($params);

// Show result
var_dump($result);
