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

    /** @var string The admin user ID to filter */
    public $filtered_admin_user_id;

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

    /** @var number The max returning record count */
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
