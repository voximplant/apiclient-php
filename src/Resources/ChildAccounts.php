<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddChildAccountSubscriptionReturn;
use Voximplant\Interfaces\ChildAccountsInterface;
use Voximplant\Interfaces\DeactivateChildAccountSubscriptionReturn;
use Voximplant\Interfaces\GetChildAccountSubscriptionTemplatesReturn;
use Voximplant\Interfaces\GetChildAccountSubscriptionsReturn;

class ChildAccounts implements ChildAccountsInterface
{
	protected $client;

	/** @object AddChildAccountSubscription */
	protected $AddChildAccountSubscriptionReturn;

	/** @object GetChildAccountSubscriptions */
	protected $GetChildAccountSubscriptionsReturn;

	/** @object GetChildAccountSubscriptionTemplates */
	protected $GetChildAccountSubscriptionTemplatesReturn;

	/** @object DeactivateChildAccountSubscription */
	protected $DeactivateChildAccountSubscriptionReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddChildAccountSubscriptionReturn = new AddChildAccountSubscriptionReturn();
		$this->GetChildAccountSubscriptionsReturn = new GetChildAccountSubscriptionsReturn();
		$this->GetChildAccountSubscriptionTemplatesReturn = new GetChildAccountSubscriptionTemplatesReturn();
		$this->DeactivateChildAccountSubscriptionReturn = new DeactivateChildAccountSubscriptionReturn();
	}


	/**
	 * @method Adds a new subscription for the specified child account.
	 */
	public function AddChildAccountSubscription(Params\AddChildAccountSubscriptionParams $params = null): AddChildAccountSubscriptionReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddChildAccountSubscriptionReturn->$key = $value;
		}
		return $this->AddChildAccountSubscriptionReturn;
	}


	/**
	 * @method Gets the active subscription(s) for the specified child account.
	 */
	public function GetChildAccountSubscriptions(Params\GetChildAccountSubscriptionsParams $params = null): GetChildAccountSubscriptionsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetChildAccountSubscriptionsReturn->$key = $value;
		}
		return $this->GetChildAccountSubscriptionsReturn;
	}


	/**
	 * @method Gets all the eligible subscription templates. A template is considered to be eligible if it is of a type that supports child accounts management.
	 */
	public function GetChildAccountSubscriptionTemplates(Params\GetChildAccountSubscriptionTemplatesParams $params = null): GetChildAccountSubscriptionTemplatesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetChildAccountSubscriptionTemplatesReturn->$key = $value;
		}
		return $this->GetChildAccountSubscriptionTemplatesReturn;
	}


	/**
	 * @method Deactivates the specified subscription(s).
	 */
	public function DeactivateChildAccountSubscription(Params\DeactivateChildAccountSubscriptionParams $params = null): DeactivateChildAccountSubscriptionReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DeactivateChildAccountSubscriptionReturn->$key = $value;
		}
		return $this->DeactivateChildAccountSubscriptionReturn;
	}
}
