<?php

namespace Voximplant\Resources\Params;

class GetAuditLogParams
{
    /** @var timestamp The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $from_date;

    /** @var timestamp The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $to_date;

    /** @var intlist The audit history ID list separated by semicolons (;) */
    public $audit_log_id;

    /** @var intlist The admin user ID list separated by semicolons (;) to filter */
    public $filtered_admin_user_id;

    /** @var boolean Whether to create an asynchronous history report instead of returning the data immediately. Has the same effect as calling GetAuditLogAsync and requires the output=csv */
    public $is_async;

    /** @var boolean Whether to get a CSV file with the column names if the output=csv */
    public $with_header;

    /** @var string The decimal mark for the CSV numbers if the output=csv. If omitted, the account locale setting is used */
    public $decimal_separator;

    /** @var stringlist The IP list separated by semicolons (;) to filter */
    public $filtered_ip;

    /** @var stringlist The function list separated by semicolons (;) to filter */
    public $filtered_cmd;

    /** @var string A relation ID to filter (for example: a phone_number value, a user_id value, an application_id value) */
    public $advanced_filters;

    /** @var boolean Whether to get records in the descent order */
    public $desc_order;

    /** @var boolean Whether to include the 'total_count' and increase performance */
    public $with_total_count;

    /** @var number The maximum returning record number. If omitted, the report service applies its own limit */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'audit_log_id' => $this->audit_log_id,
                    'filtered_admin_user_id' => $this->filtered_admin_user_id,
                    'is_async' => $this->is_async !== null ? (filter_var($this->is_async, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'decimal_separator' => $this->decimal_separator,
                    'filtered_ip' => $this->filtered_ip,
                    'filtered_cmd' => $this->filtered_cmd,
                    'advanced_filters' => $this->advanced_filters,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_total_count' => $this->with_total_count !== null ? (filter_var($this->with_total_count, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
