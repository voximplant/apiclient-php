<?php

/**
 * @method GetTransactionHistoryAsync The [GetTransactionHistory] asynchronous implementation. Use this function to download a large amounts of data. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetTransactionHistoryAsyncParams;

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
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * timezone - The selected timezone or the 'auto' value (the account location)
 * transaction_id - The transaction ID list separated by semicolons (;)
 * payment_reference - The external payment reference to filter
 * transaction_type - The transaction type list separated by semicolons (;). The following values are possible: gift_revoke, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, rub_card_periodic_payment, rub_card_overrun_payment, rub_card_payment, robokassa_payment, gift, promo, adjustment, wire_transfer, us_wire_transfer, refund, discount, mgp_charge, mgp_startup, mgp_business, mgp_big_business, mgp_enterprise, mgp_large_enterprise, techsupport_charge, tax_charge, monthly_fee_charge, grace_credit_payment, grace_credit_provision, mau_charge, mau_overrun, im_charge, im_overrun, fmc_charge, sip_registration_charge, development_fee, money_transfer_to_child, money_transfer_to_parent, money_acceptance_from_child, money_acceptance_from_parent, phone_number_installation, phone_number_charge, toll_free_phone_number_installation, toll_free_phone_number_charge, services, user_money_transfer, paypal_payment, paypal_overrun_payment, paypal_periodic_payment
 * user_id - The user ID list separated by semicolons (;)
 * child_account_id - The child account ID list separated by semicolons (;). Use the 'all' value to select all child accounts
 * children_transactions_only - Whether to get the children account transactions only
 * users_transactions_only - Whether to get the users' transactions only
 * desc_order - Whether to get records in the descent order
 * is_uncommitted - Whether to get transactions on hold (transactions for which money is reserved but not yet withdrawn from the account)
 * with_header - Whether to get a CSV file with the column names if the output=csv
 * output - The output format. The following values available: **csv**. The default value is **csv**
 */
$params = new GetTransactionHistoryAsyncParams();

$params->from_date = '2012-01-01 00:00:00';
$params->to_date = '2014-01-01 00:00:00';
$params->transaction_type = array (
    0 => 'gift',
    1 => 'money_distribution',
);
$params->timezone = 'Etc/GMT';
$params->output = 'csv';

// Get the three transactions record from the 2012-01-01 00:00:00 UTC to the 2014-01-01 00:00:00 UTC with the 'gift' or 'money_distribution' types.
$result = $voxApi->History->GetTransactionHistoryAsync($params);

// Show result
var_dump($result);
