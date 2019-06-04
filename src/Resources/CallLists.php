<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AppendToCallListReturn;
use Voximplant\Interfaces\CallListsInterface;
use Voximplant\Interfaces\CreateCallListReturn;
use Voximplant\Interfaces\CreateManualCallListReturn;
use Voximplant\Interfaces\GetCallListDetailsReturn;
use Voximplant\Interfaces\GetCallListsReturn;
use Voximplant\Interfaces\RecoverCallListReturn;
use Voximplant\Interfaces\StartNextCallTaskReturn;
use Voximplant\Interfaces\StopCallListProcessingReturn;

class CallLists implements CallListsInterface
{
	protected $client;

	/** @ objectCreateCallList */
	protected $CreateCallListReturn;

	/** @ objectCreateManualCallList */
	protected $CreateManualCallListReturn;

	/** @ objectStartNextCallTask */
	protected $StartNextCallTaskReturn;

	/** @ objectAppendToCallList */
	protected $AppendToCallListReturn;

	/** @ objectGetCallLists */
	protected $GetCallListsReturn;

	/** @ objectGetCallListDetails */
	protected $GetCallListDetailsReturn;

	/** @ objectStopCallListProcessing */
	protected $StopCallListProcessingReturn;

	/** @ objectRecoverCallList */
	protected $RecoverCallListReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->CreateCallListReturn = new CreateCallListReturn();
		$this->CreateManualCallListReturn = new CreateManualCallListReturn();
		$this->StartNextCallTaskReturn = new StartNextCallTaskReturn();
		$this->AppendToCallListReturn = new AppendToCallListReturn();
		$this->GetCallListsReturn = new GetCallListsReturn();
		$this->GetCallListDetailsReturn = new GetCallListDetailsReturn();
		$this->StopCallListProcessingReturn = new StopCallListProcessingReturn();
		$this->RecoverCallListReturn = new RecoverCallListReturn();
	}


	/**
	 * @method Adds a new CSV file for call list processing and starts the specified rule immediately. To send a file, use the request body. To set the call time constraints, use the options ____start_execution_time__ and ____end_execution_time__ in CSV file. Time is in UTC+0 24-h format: HH:mm:ss. IMPORTANT: the account's balance should be equal or greater than 1 USD. If the balance is lower than 1 USD, the call list processing won't start, or it stops immediately if it was active.
	 */
	public function CreateCallList(Params\CreateCallListParams $params = null): CreateCallListReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->CreateCallListReturn->$key = $value;
		}
		return $this->CreateCallListReturn;
	}


	/**
	 * @method Adds a new CSV file for manual call list processing and bind it with the specified rule. To send a file, use the request body. To start processing calls, use the function StartNextCallTask. IMPORTANT: the account's balance should be equal or greater than 1 USD. If the balance is lower than 1 USD, the call list processing won't start, or it stops immediately if it was active.
	 */
	public function CreateManualCallList(Params\CreateManualCallListParams $params = null): CreateManualCallListReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->CreateManualCallListReturn->$key = $value;
		}
		return $this->CreateManualCallListReturn;
	}


	/**
	 * @method Start processing the next task.
	 */
	public function StartNextCallTask(Params\StartNextCallTaskParams $params = null): StartNextCallTaskReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->StartNextCallTaskReturn->$key = $value;
		}
		return $this->StartNextCallTaskReturn;
	}


	/**
	 * @method Appending a new task to the existing call list.
	 */
	public function AppendToCallList(Params\AppendToCallListParams $params = null): AppendToCallListReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AppendToCallListReturn->$key = $value;
		}
		return $this->AppendToCallListReturn;
	}


	/**
	 * @method Get all call lists for the specified user.
	 */
	public function GetCallLists(Params\GetCallListsParams $params = null): GetCallListsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetCallListsReturn->$key = $value;
		}
		return $this->GetCallListsReturn;
	}


	/**
	 * @method Get details of the specified call list. Returns a CSV file by default.
	 */
	public function GetCallListDetails(Params\GetCallListDetailsParams $params = null): GetCallListDetailsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetCallListDetailsReturn->$key = $value;
		}
		return $this->GetCallListDetailsReturn;
	}


	/**
	 * @method Stop processing the specified call list.
	 */
	public function StopCallListProcessing(Params\StopCallListProcessingParams $params = null): StopCallListProcessingReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->StopCallListProcessingReturn->$key = $value;
		}
		return $this->StopCallListProcessingReturn;
	}


	/**
	 * @method Resume processing the specified call list.
	 */
	public function RecoverCallList(Params\RecoverCallListParams $params = null): RecoverCallListReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->RecoverCallListReturn->$key = $value;
		}
		return $this->RecoverCallListReturn;
	}
}
