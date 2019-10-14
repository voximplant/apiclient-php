<?php

namespace Voximplant\Resources\Params;

class GetChildAccountSubscriptionsParams
{
	/** @var number The child account ID. */
	public $child_account_id;

	/** @var number The subscription ID. If empty, then all the non-deactivated subscriptions for the current child account will be retrieved. */
	public $subscription_id;
}
