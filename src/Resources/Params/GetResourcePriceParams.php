<?php

namespace Voximplant\Resources\Params;

class GetResourcePriceParams
{
	/** @var stringlist The resource type list separated by the ';' symbol. The possible values are: ASR, AUDIORECORD, PSTN_IN_GB, PSTN_IN_GEOGRAPHIC, PSTN_IN_RU, PSTN_IN_RU_TOLLFREE, PSTN_IN_US, PSTN_IN_US_TF, PSTNOUT, SIPOUT, SIPOUTVIDEO, VOIPIN, VOIPOUT, VOIPOUTVIDEO */
	public $resource_type;

	/** @var intlist The price group ID list separated by the ';' symbol. */
	public $price_group_id;

	/** @var string The price group name template to filter. */
	public $price_group_name;

	/** @var stringlist The resource parameter list separated by the ';' symbol. Example: a phone number list. */
	public $resource_param;
}
