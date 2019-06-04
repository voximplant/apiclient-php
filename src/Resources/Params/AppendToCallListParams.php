<?php

namespace Voximplant\Resources\Params;

class AppendToCallListParams
{
	/** @var number The call list ID */
	public $list_id;

	/** @var string Can be used instead of list_id. The unique name call list */
	public $list_name;

	/** @var string Send as Body Request or multiform. */
	public $file_content;

	/** @var string Encoding file. The default is UTF-8. */
	public $encoding;

	/** @var string Escape character. Used for parsing csv */
	public $escape;

	/** @var string Separator values. The default is ';' */
	public $delimiter;
}
