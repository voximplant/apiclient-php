<?php

namespace Voximplant\Resources\Params;

class GetChildrenAccountsParams
{
    /** @var intlist The account ID list separated by the ';' symbol. Use the 'all' value to select all accounts */
    public $child_account_id;

    /** @var string The child account name part to filter */
    public $child_account_name;

    /** @var string The child ccount email to filter */
    public $child_account_email;

    /** @var boolean The active flag to filter */
    public $active;

    /** @var boolean The frozen flag to filter */
    public $frozen;

    /** @var boolean Set true to ignore the invalid 'child_account_id' items */
    public $ignore_invalid_accounts;

    /** @var boolean Set true to output the account_id only */
    public $brief_output;

    /** @var boolean Set true to output the account_id, account_name, account_email only */
    public $medium_output;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    /** @var string The following values are available: 'child_account_id', 'child_account_name' and 'child_account_email' */
    public $order_by;

    /** @var boolean Set true to get the user live balance */
    public $return_live_balance;

    public function toArray()
    {
        return [
                'child_account_id' => $this->child_account_id,
                    'child_account_name' => $this->child_account_name,
                    'child_account_email' => $this->child_account_email,
                    'active' => $this->active !== null ? (filter_var($this->active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'frozen' => $this->frozen !== null ? (filter_var($this->frozen, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'ignore_invalid_accounts' => $this->ignore_invalid_accounts !== null ? (filter_var($this->ignore_invalid_accounts, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'brief_output' => $this->brief_output !== null ? (filter_var($this->brief_output, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'medium_output' => $this->medium_output !== null ? (filter_var($this->medium_output, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'order_by' => $this->order_by,
                    'return_live_balance' => $this->return_live_balance !== null ? (filter_var($this->return_live_balance, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
