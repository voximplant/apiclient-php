<?php

namespace Voximplant\Resources\Params;

class A2PGetSmsHistoryParams
{
    /** @var string The source phone number */
    public $source_number;

    /** @var string The destination phone number */
    public $destination_number;

    /** @var number Maximum number of resulting rows fetched. Must be not bigger than 1000. If left blank, then the default value of 1000 will be used */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    /** @var timestamp Date from which the search is to start. Format is 'yyyy-MM-dd HH:mm:ss' */
    public $from_date;

    /** @var timestamp Date from which the search is to end. Format is 'yyyy-MM-dd HH:mm:ss' */
    public $to_date;

    /** @var string The output format. The possible values are json, csv */
    public $output;

    /** @var number The delivery status ID: QUEUED - 1, DISPATCHED - 2, ABORTED - 3, REJECTED - 4, DELIVERED - 5, FAILED - 6, EXPIRED - 7, UNKNOWN - 8 */
    public $delivery_status;
}
