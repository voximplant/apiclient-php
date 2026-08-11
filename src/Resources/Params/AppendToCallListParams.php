<?php

namespace Voximplant\Resources\Params;

class AppendToCallListParams
{
    /** @var number Call list ID. Required unless list_name is provided. */
    public $list_id;

    /** @var string The unique name of the call list. Required unless list_id is provided. */
    public $list_name;

    /** @var file Send as the request body or multiform. Refer to the Call lists guide to learn about file syntax */
    public $file_content;

    /** @var string Encoding file. The default value is UTF-8 */
    public $encoding;

    /** @var string Escape character for parsing csv */
    public $escape;

    /** @var string Separator values. The default value is ';' */
    public $delimiter;

    /** @var string Quote character for parsing csv */
    public $quote;
}
