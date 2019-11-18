<?php

namespace Voximplant\Resources\Params;

class GetChildrenAccountsParams
{
    /** @var intlist The account ID list separated by the ';' symbol or the 'all' value. */
    public $child_account_id;

    /** @var string The child account name part to filter. */
    public $child_account_name;

    /** @var string The child ccount email to filter. */
    public $child_account_email;

    /** @var boolean The active flag to filter. */
    public $active;

    /** @var boolean The frozen flag to filter. */
    public $frozen;

    /** @var boolean Set true to ignore the invalid 'child_account_id' items. */
    public $ignore_invalid_accounts;

    /** @var boolean Set true to output the account_id only. */
    public $brief_output;

    /** @var boolean Set true to output the account_id, account_name, account_email only. */
    public $medium_output;

    /** @var number The max returning record count. */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;

    /** @var string The following values are available: 'child_account_id', 'child_account_name' and 'child_account_email'. */
    public $order_by;

    /** @var boolean Set true to get the user live balance. */
    public $return_live_balance;
}
