<?php

namespace Voximplant\Resources\Params;

class GetSmsHistoryParams
{
    /** @var string The source phone number. */
    public $source_number;

    /** @var string The destination phone number. */
    public $destination_number;

    /** @var string Sent or received SMS. Possible values: 'IN', 'OUT', 'in, 'out'. Leave blank to get both incoming and outgoing messages. */
    public $direction;

    /** @var number Maximum number of resulting rows fetched. Must be not more than 1000. If left blank, then the default value of 1000 will be used. */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;

    /** @var timestamp Date from which to perform search. Format is 'yyyy-MM-dd HH:mm:ss'. */
    public $from_date;

    /** @var timestamp Date until which to perform search. Format is 'yyyy-MM-dd HH:mm:ss'. */
    public $to_date;

    /** @var string The output format. The following values available: json, csv. */
    public $output;
}
