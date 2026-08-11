<?php

/**
 * @method GetTransactionHistory Gets the transaction history.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetTransactionHistoryParams;

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
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. If both dates are omitted and is_uncommitted is false, a server-configured default interval is used (default is one month)
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. If both dates are omitted and is_uncommitted is false, a server-configured default interval is used (default is one month)
 * application_id - The application ID to filter. Can be used together with or instead of the application_name parameter
 * application_name - The application name to filter. Can be used instead of the application_id parameter
 * subscription_id - The subscription ID list separated by semicolons (;) to filter
 * subscription_name - The subscription name list separated by semicolons (;) to filter
 * resource_type - The resource type list separated by semicolons (;) to filter
 * price_group_name - The price group name list separated by semicolons (;) to filter
 * use_accounting_dates - Whether to filter by the accounting dates instead of the transaction's `performed_at` timestamps
 * with_extended_info - Whether to include the extended transaction fields, such as the application, subscription, resource type and price group, in the response
 * is_async - Whether to create an asynchronous history report instead of returning the data immediately. Has the same effect as calling `GetTransactionHistoryAsync` and requires the output=csv
 * with_header - Whether to get a CSV file with the column names if the output=csv
 * decimal_separator - The decimal mark for the CSV numbers if the output=csv. If omitted, the account locale setting is used
 * timezone - The selected timezone or the 'auto' value (the account location)
 * transaction_id - The transaction ID list separated by semicolons (;)
 * payment_reference - The external payment reference to filter
 * transaction_type - The transaction type list separated by semicolons (;). The following values are possible: gift_revoke, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, rub_card_periodic_payment, rub_card_overrun_payment, rub_card_payment, robokassa_payment, gift, promo, adjustment, wire_transfer, us_wire_transfer, refund, discount, mgp_charge, mgp_startup, mgp_business, mgp_big_business, mgp_enterprise, mgp_large_enterprise, techsupport_charge, tax_charge, monthly_fee_charge, grace_credit_payment, grace_credit_provision, mau_charge, mau_overrun, im_charge, im_overrun, fmc_charge, sip_registration_charge, development_fee, money_transfer_to_child, money_transfer_to_parent, money_acceptance_from_child, money_acceptance_from_parent, phone_number_installation, phone_number_charge, toll_free_phone_number_installation, toll_free_phone_number_charge, services, user_money_transfer, paypal_payment, paypal_overrun_payment, paypal_periodic_payment
 * user_id - The user ID list separated by semicolons (;)
 * child_account_id - The child account ID list separated by semicolons (;). Use the 'all' value to select all child accounts
 * children_transactions_only - Whether to get the children account transactions only
 * users_transactions_only - Whether to get the users' transactions only
 * desc_order - Whether to get records in the descent order
 * with_total_count - Whether to include the 'total_count' and increase performance
 * count - The number of returning records. The maximum value is 1000
 * offset - The number of records to skip in the output with a maximum value of 10000
 * is_uncommitted - Whether to get transactions on hold (transactions for which money is reserved but not yet withdrawn from the account)
 */
$params = new GetTransactionHistoryParams();

$params->from_date = '2012-01-01 00:00:00';
$params->to_date = '2014-01-01 00:00:00';
$params->count = 3;
$params->transaction_type = array (
    0 => 'gift',
    1 => 'money_distribution',
);
$params->timezone = 'Etc/GMT';

// Get the three transactions record from the 2012-01-01 00:00:00 UTC to the 2014-01-01 00:00:00 UTC with the 'gift' or 'money_distribution' types.
$result = $voxApi->History->GetTransactionHistory($params);

// Show result
var_dump($result);
