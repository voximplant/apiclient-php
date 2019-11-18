<?php

namespace Voximplant\Resources\Params;

class GetCallListDetailsParams
{
    /** @var number The list ID. */
    public $list_id;

    /** @var number Maximum number of entries in the result */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;

    /** @var string Output format (CSV/JSON/XLS). Default CSV */
    public $output;

    /** @var string Encoding of the output file. Default UTF-8 */
    public $encoding;

    /** @var string Separator values. The default is ';' */
    public $delimiter;
}
