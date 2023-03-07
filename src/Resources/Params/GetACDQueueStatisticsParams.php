<?php

namespace Voximplant\Resources\Params;

class GetACDQueueStatisticsParams
{
    /** @var timestamp Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss' */
    public $from_date;

    /** @var timestamp Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss' */
    public $to_date;

    /** @var boolean If set to true, key names in returned JSON will be abbreviated to reduce response byte size. The abbreviations are: 'WT' for 'WaitingTime', 'SA' for 'SpeedOfAnswer', 'AT' is for 'AbandonmentTime', 'HT' is for 'HandlingTime', 'TT' is for 'TalkTime', 'ACW' is for 'AfterCallWork', 'QL' is for 'QueueLength', 'TC' is for 'TotalCalls', 'AC' is for 'AnsweredCalls', 'UAC' is for 'UnansweredCalls', 'RC' is for 'RejectedCalls', 'SL' is for 'ServiceLevel', 'TWT' is for 'TotalWaitingTime', 'TST' is for 'TotalSubmissionTime', 'TAT' is for 'TotalAbandonmentTime', 'THT' is for 'TotalHandlingTime', 'TTT' is for 'TotalTalkTime', 'TACW' is for 'TotalAfterCallWork' */
    public $abbreviation;

    /** @var intlist The ACD queue ID list separated by semicolon (;). Use the 'all' value to select all ACD queues */
    public $acd_queue_id;

    /** @var stringlist List of item names abbreviations separated by semicolon (;). Returned JSON will include keys only for the selected items. Special 'all' value defines all possible items, see [ACDQueueStatisticsType] for a complete list. See 'abbreviation' description for complete abbreviation list */
    public $report;

    /** @var string Specifies how records are grouped by date and time. If set to 'day', the criteria is a day number. If set to 'hour_of_day', the criteria is a 60-minute interval within a day. If set to 'hour', the criteria is both day number and 60-minute interval within that day. If set to 'none', records are not grouped by date and time */
    public $aggregation;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'abbreviation' => $this->abbreviation !== null ? (filter_var($this->abbreviation, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'acd_queue_id' => $this->acd_queue_id,
                    'report' => $this->report,
                    'aggregation' => $this->aggregation,
            ];
    }
}
