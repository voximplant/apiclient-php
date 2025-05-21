<?php

namespace Voximplant\Resources\Params;

class AppendToCallListParams
{
    /** @var number The call list ID */
    public $list_id;

    /** @var string The unique name of the call list. Can be used instead of list_id */
    public $list_name;

    /** @var file Send as request body or multiform */
    public $file_content;

    /** @var string Encoding file. The default value is UTF-8 */
    public $encoding;

    /** @var string Escape character for parsing csv */
    public $escape;

    /** @var string Separator values. The default value is ';' */
    public $delimiter;
}
