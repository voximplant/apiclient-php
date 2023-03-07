<?php

namespace Voximplant\Resources\Params;

class GetAuditLogParams
{
    /** @var timestamp The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $from_date;

    /** @var timestamp The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $to_date;

    /** @var intlist The audit history ID list separated by semicolon (;) */
    public $audit_log_id;

    /** @var string The admin user ID to filter */
    public $filtered_admin_user_id;

    /** @var stringlist The IP list separated by semicolon (;) to filter */
    public $filtered_ip;

    /** @var stringlist The function list separated by semicolon (;) to filter */
    public $filtered_cmd;

    /** @var string A relation ID to filter (for example: a phone_number value, a user_id value, an application_id value) */
    public $advanced_filters;

    /** @var boolean Set false to get a CSV file without the column names if the output=csv */
    public $with_header;

    /** @var boolean Set true to get records in the descent order */
    public $desc_order;

    /** @var boolean Set false to omit the 'total_count' and increase performance */
    public $with_total_count;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    /** @var string The output format. The following values available: json, csv */
    public $output;

    /** @var boolean Set true to get records in the asynchronous mode (for csv output only). If it's true, the request is available via [GetHistoryReports] and [DownloadHistoryReport] methods */
    public $is_async;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'audit_log_id' => $this->audit_log_id,
                    'filtered_admin_user_id' => $this->filtered_admin_user_id,
                    'filtered_ip' => $this->filtered_ip,
                    'filtered_cmd' => $this->filtered_cmd,
                    'advanced_filters' => $this->advanced_filters,
                    'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_total_count' => $this->with_total_count !== null ? (filter_var($this->with_total_count, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'output' => $this->output,
                    'is_async' => $this->is_async !== null ? (filter_var($this->is_async, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
