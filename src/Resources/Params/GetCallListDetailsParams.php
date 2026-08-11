<?php

namespace Voximplant\Resources\Params;

class GetCallListDetailsParams
{
    /** @var number The list ID */
    public $list_id;

    /** @var number Maximum number of entries in the result. If output is json, the default and maximum value is 1000; for csv and xls no limit is applied unless the parameter is specified */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var string The output format. The following values available: **json**, **csv**, **xls**. The default value is **csv** */
    public $output;

    /** @var string Encoding of the output file. Default UTF-8 */
    public $encoding;

    /** @var string Separator values. The default value is ';' */
    public $delimiter;

    /** @var string Batch UUID to filter the tasks */
    public $batch_id;

    /** @var boolean Whether to create an asynchronous report instead of returning the data immediately. Requires output to be csv or xls */
    public $is_async;

    /** @var boolean Whether to use the new csv layout. Applies to asynchronous reports; for xls the value is always true */
    public $new_csv_style;

    public function toArray()
    {
        return [
                'list_id' => $this->list_id,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'output' => $this->output,
                    'encoding' => $this->encoding,
                    'delimiter' => $this->delimiter,
                    'batch_id' => $this->batch_id,
                    'is_async' => $this->is_async !== null ? (filter_var($this->is_async, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'new_csv_style' => $this->new_csv_style !== null ? (filter_var($this->new_csv_style, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
