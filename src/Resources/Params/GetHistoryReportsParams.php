<?php

namespace Voximplant\Resources\Params;

class GetHistoryReportsParams
{
    /** @var number The history report ID to filter */
    public $history_report_id;

    /** @var stringlist The history report type list separated by semicolons (;). Use the 'all' value to select all history report types. The following values are possible: calls, calls_brief, transactions, audit, call_list, transactions_on_hold */
    public $history_type;

    /** @var timestamp The UTC creation from date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $created_from;

    /** @var timestamp The UTC creation to date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $created_to;

    /** @var boolean Whether the report is completed */
    public $is_completed;

    /** @var boolean Whether to get records in the descent order */
    public $desc_order;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var intlist The application ID to filter. Can be a list separated by semicolons (;). Use the 'all' value to select all applications */
    public $application_id;

    public function toArray()
    {
        return [
                'history_report_id' => $this->history_report_id,
                    'history_type' => $this->history_type,
                    'created_from' => $this->created_from,
                    'created_to' => $this->created_to,
                    'is_completed' => $this->is_completed !== null ? (filter_var($this->is_completed, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'application_id' => $this->application_id,
            ];
    }
}
