<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddQueueReturn;
use Voximplant\Interfaces\BindUserToQueueReturn;
use Voximplant\Interfaces\DelQueueReturn;
use Voximplant\Interfaces\GetACDOperatorStatisticsReturn;
use Voximplant\Interfaces\GetACDQueueStatisticsReturn;
use Voximplant\Interfaces\GetACDStateReturn;
use Voximplant\Interfaces\GetQueuesReturn;
use Voximplant\Interfaces\QueuesInterface;
use Voximplant\Interfaces\SetQueueInfoReturn;

class Queues implements QueuesInterface
{
	protected $client;

	/** @ objectAddQueue */
	protected $AddQueueReturn;

	/** @ objectBindUserToQueue */
	protected $BindUserToQueueReturn;

	/** @ objectDelQueue */
	protected $DelQueueReturn;

	/** @ objectSetQueueInfo */
	protected $SetQueueInfoReturn;

	/** @ objectGetQueues */
	protected $GetQueuesReturn;

	/** @ objectGetACDState */
	protected $GetACDStateReturn;

	/** @ objectGetACDOperatorStatistics */
	protected $GetACDOperatorStatisticsReturn;

	/** @ objectGetACDQueueStatistics */
	protected $GetACDQueueStatisticsReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddQueueReturn = new AddQueueReturn();
		$this->BindUserToQueueReturn = new BindUserToQueueReturn();
		$this->DelQueueReturn = new DelQueueReturn();
		$this->SetQueueInfoReturn = new SetQueueInfoReturn();
		$this->GetQueuesReturn = new GetQueuesReturn();
		$this->GetACDStateReturn = new GetACDStateReturn();
		$this->GetACDOperatorStatisticsReturn = new GetACDOperatorStatisticsReturn();
		$this->GetACDQueueStatisticsReturn = new GetACDQueueStatisticsReturn();
	}


	/**
	 * @method Adds a new ACD queue.
	 */
	public function AddQueue(Params\AddQueueParams $params = null): AddQueueReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddQueueReturn->$key = $value;
		}
		return $this->AddQueueReturn;
	}


	/**
	 * @method Bind/unbind users to/from the specified ACD queues. Note that users and queues should be already bound to the same application.
	 */
	public function BindUserToQueue(Params\BindUserToQueueParams $params = null): BindUserToQueueReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->BindUserToQueueReturn->$key = $value;
		}
		return $this->BindUserToQueueReturn;
	}


	/**
	 * @method Deletes the ACD queue.
	 */
	public function DelQueue(Params\DelQueueParams $params = null): DelQueueReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelQueueReturn->$key = $value;
		}
		return $this->DelQueueReturn;
	}


	/**
	 * @method Edits the ACD queue.
	 */
	public function SetQueueInfo(Params\SetQueueInfoParams $params = null): SetQueueInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetQueueInfoReturn->$key = $value;
		}
		return $this->SetQueueInfoReturn;
	}


	/**
	 * @method Gets the ACD queues.
	 */
	public function GetQueues(Params\GetQueuesParams $params = null): GetQueuesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetQueuesReturn->$key = $value;
		}
		return $this->GetQueuesReturn;
	}


	/**
	 * @method Gets the current ACD queue state.
	 */
	public function GetACDState(Params\GetACDStateParams $params = null): GetACDStateReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetACDStateReturn->$key = $value;
		}
		return $this->GetACDStateReturn;
	}


	/**
	 * @method Get statistics for calls distributed to users (referred as 'operators') via the 'ACD' module. This method can filter statistic based on operator ids, queue ids and date-time interval. It can also group results by day or hour.
	 */
	public function GetACDOperatorStatistics(Params\GetACDOperatorStatisticsParams $params = null): GetACDOperatorStatisticsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetACDOperatorStatisticsReturn->$key = $value;
		}
		return $this->GetACDOperatorStatisticsReturn;
	}


	/**
	 * @method Get statistics for calls distributed to users (referred as 'operators') via the 'queue' distribution system. This method can filter statistic based on operator ids, queue ids and date-time interval. It can also group results by day or hour.
	 */
	public function GetACDQueueStatistics(Params\GetACDQueueStatisticsParams $params = null): GetACDQueueStatisticsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetACDQueueStatisticsReturn->$key = $value;
		}
		return $this->GetACDQueueStatisticsReturn;
	}
}
