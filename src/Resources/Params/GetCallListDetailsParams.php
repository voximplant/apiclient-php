<?php

namespace Voximplant\Resources\Params;

class GetCallListDetailsParams
{
    /** @var number The list ID */
    public $list_id;

    /** @var number Maximum number of entries in the result */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var string The output format. The following values available: **json**, **csv**, **xls**. The default value is **csv** */
    public $output;

    /** @var string Encoding of the output file. Default UTF-8 */
    public $encoding;

    /** @var string Separator values. The default value is ';' */
    public $delimiter;
}
