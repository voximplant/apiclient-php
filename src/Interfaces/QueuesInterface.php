<?php

namespace Voximplant\Interfaces;

interface QueuesInterface
{
	/**
	 * @method Adds a new ACD queue.
	 */
	public function AddQueue(\Voximplant\Resources\Params\AddQueueParams $params);


	/**
	 * @method Bind/unbind users to/from the specified ACD queues. Note that users and queues should be already bound to the same application.
	 */
	public function BindUserToQueue(\Voximplant\Resources\Params\BindUserToQueueParams $params);


	/**
	 * @method Deletes the ACD queue.
	 */
	public function DelQueue(\Voximplant\Resources\Params\DelQueueParams $params);


	/**
	 * @method Edits the ACD queue.
	 */
	public function SetQueueInfo(\Voximplant\Resources\Params\SetQueueInfoParams $params);


	/**
	 * @method Gets the ACD queues.
	 */
	public function GetQueues(\Voximplant\Resources\Params\GetQueuesParams $params);


	/**
	 * @method Gets the current ACD queue state.
	 */
	public function GetACDState(\Voximplant\Resources\Params\GetACDStateParams $params);


	/**
	 * @method Get statistics for calls distributed to users (referred as 'operators') via the 'ACD' module. This method can filter statistic based on operator ids, queue ids and date-time interval. It can also group results by day or hour.
	 */
	public function GetACDOperatorStatistics(\Voximplant\Resources\Params\GetACDOperatorStatisticsParams $params);


	/**
	 * @method Get statistics for calls distributed to users (referred as 'operators') via the 'queue' distribution system. This method can filter statistic based on operator ids, queue ids and date-time interval. It can also group results by day or hour.
	 */
	public function GetACDQueueStatistics(\Voximplant\Resources\Params\GetACDQueueStatisticsParams $params);
}
class AddQueueReturn
{
	/** @var number 1 */
	public $result;

	/** @var number The ACD queue ID. */
	public $acd_queue_id;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class BindUserToQueueReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DelQueueReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetQueueInfoReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetQueuesReturn
{
	/** @var [QueueInfoType] */
	public $result;

	/** @var number The total found queue count. */
	public $total_count;

	/** @var number The returned queue count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetACDStateReturn
{
	/** @var ACDStateType */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetACDOperatorStatisticsReturn
{
	/** @var [ACDOperatorAggregationGroupType] List of groups, grouped by user ID or date according to the 'group' method call argument */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetACDQueueStatisticsReturn
{
	/** @var [ACDQueueStatisticsType] List of records grouped grouped by date according to the 'aggregation' method call argument */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
