<?php

namespace Voximplant\Resources\Params;

class GetRecordStoragesParams
{
	/** @var intlist The record storage ID list separated by the ';' symbol. */
	public $record_storage_id;

	/** @var stringlist The record storage name list separated by the ';' symbol. */
	public $record_storage_name;

	/** @var boolean Set true to get the private record storages. If set to true, there is the __is_public : bool__ parameter in a response. */
	public $with_private;
}
