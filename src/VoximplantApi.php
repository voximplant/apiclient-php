<?php

namespace Voximplant;

use Voximplant\Helpers\DateHelpers;
use Voximplant\Helpers\FunctionHelpers;
use Voximplant\Http\Curl;
use Voximplant\Resources\Accounts;
use Voximplant\Resources\AdminRoles;
use Voximplant\Resources\AdminUsers;
use Voximplant\Resources\Applications;
use Voximplant\Resources\AuthorizedIPs;
use Voximplant\Resources\CallLists;
use Voximplant\Resources\CallerIDs;
use Voximplant\Resources\ChildAccounts;
use Voximplant\Resources\DialogflowCredentials;
use Voximplant\Resources\History;
use Voximplant\Resources\PSTNBlacklist;
use Voximplant\Resources\PhoneNumbers;
use Voximplant\Resources\PushCredentials;
use Voximplant\Resources\Queues;
use Voximplant\Resources\RecordStorages;
use Voximplant\Resources\RegulationAddress;
use Voximplant\Resources\RoleSystem;
use Voximplant\Resources\Rules;
use Voximplant\Resources\SIPRegistration;
use Voximplant\Resources\SIPWhiteList;
use Voximplant\Resources\SMS;
use Voximplant\Resources\Scenarios;
use Voximplant\Resources\Skills;
use Voximplant\Resources\Types\RequestType;
use Voximplant\Resources\Types\ResultType;
use Voximplant\Resources\Users;

class VoximplantApi
{
	/** @var API url */
	protected $baseUrl = 'api.voximplant.com';

	/** @var HTTP curl client */
	private $curl;

	/** @var date helpers */
	private $dateHelpers;

	/** @var default helpers */
	private $functionHelpers;

	/** @var string Convert send date fields to UTC TimeZone format or set false */
	public $requestTimeZone = 'UTC';

	/** @var string Convert result date fields to UTC TimeZone format or set false */
	public $resultTimeZone = 'UTC';

	/** @var array Convert request date fields ignore for methods */
	public $requestTimeZoneIgnore = ['GetCallHistory', 'GetTransactionHistory'];

	/** @var array Convert result date fields ignore for methods */
	public $resultTimeZoneIgnore = ['GetCallHistory', 'GetTransactionHistory'];

	/** @var string Path to file with result CreateKey method */
	public $tokenPath = false;

	/** @var object Accounts Gets the account's info such as account_id, account_name, account_email etc. */
	public $Accounts;

	/** @var object Applications Adds a new account's application. */
	public $Applications;

	/** @var object Users Adds a new user. */
	public $Users;

	/** @var object CallLists Adds a new CSV file for call list processing and starts the specified rule immediately. To send a file, use the request body. To set the call time constraints, use the following options in a CSV file: ____start_execution_time__ – when the call list processing will start every day____end_execution_time__ – when the call list processing will stop every day____start_at__ – when the call list processing will start. If not specified, the processing will start immediately after a method call.Time is in UTC+0 24-h format: HH:mm:ss. IMPORTANT: the account's balance should be equal or greater than 1 USD. If the balance is lower than 1 USD, the call list processing won't start, or it stops immediately if it was active. */
	public $CallLists;

	/** @var object Scenarios Adds a new scenario. Please use the POST method. */
	public $Scenarios;

	/** @var object Rules Adds a new rule for the application. */
	public $Rules;

	/** @var object History Gets the call history. */
	public $History;

	/** @var object PSTNBlacklist Add a new phone number to the PSTN blacklist. BlackList works for numbers that are purchased from Voximplant only. Since we have no control over exact phone number format for calls from SIP integrations, blacklisting such numbers should be done via JavaScript scenarios. */
	public $PSTNBlacklist;

	/** @var object SIPWhiteList Adds a new network address to the SIP white list. */
	public $SIPWhiteList;

	/** @var object SIPRegistration Create a new SIP registration. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You should set is_persistent=true if you specify the user_id or user_name. You can bind only one SIP registration to the user (the previous SIP registration will be auto unbound). */
	public $SIPRegistration;

	/** @var object PhoneNumbers Attach the phone number to the account. Note that phone numbers of some countries may require additional verification steps. */
	public $PhoneNumbers;

	/** @var object CallerIDs Adds a new caller ID. Caller ID is the phone that will be displayed to the called user. This number can be used for call back. */
	public $CallerIDs;

	/** @var object Queues Adds a new ACD queue. */
	public $Queues;

	/** @var object Skills Adds a new ACD operator skill. */
	public $Skills;

	/** @var object AdminUsers Adds a new admin user into the specified parent or child account. */
	public $AdminUsers;

	/** @var object AdminRoles Adds a new admin role. */
	public $AdminRoles;

	/** @var object AuthorizedIPs Adds a new authorized IP4 or network to the white/black list. */
	public $AuthorizedIPs;

	/** @var object RegulationAddress Link regulation address to phone */
	public $RegulationAddress;

	/** @var object PushCredentials Add push credentials */
	public $PushCredentials;

	/** @var object DialogflowCredentials Add Dialogflow key */
	public $DialogflowCredentials;

	/** @var object SMS Send SMS message between two phone numbers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the is_sms_supported property in the objects returned by the /GetPhoneNumbers HTTP API) and SMS should be enabled for it via the /ControlSms HTTP API. SMS messages can be received via HTTP callbacks, see this article for details. */
	public $SMS;

	/** @var object RecordStorages Get the record storages. */
	public $RecordStorages;

	/** @var object RoleSystem Creates a public/private key pair. You can optionally specify one or more roles for the key, see [this article](https://voximplant.com/blog/service-accounts-introduction) for details. */
	public $RoleSystem;

	/** @var object ChildAccounts Adds a new subscription for the specified child account. */
	public $ChildAccounts;


	/**
	 * VoximplantApi constructor.
	 *
	 * @param bool $tokenPath
	 * @param bool $host
	 */
	public function __construct($tokenPath = false, $host = false)
	{
		// Token file path
		if (!empty($tokenPath)) {
		    $this->tokenPath = $tokenPath;
		} elseif (!empty($_ENV["VOXIMPLANT_CREDENTIALS_PATH"])) {
		    $this->tokenPath = $_ENV["VOXIMPLANT_CREDENTIALS_PATH"];
		}

		// Set API host
		if (!empty($host)) {
		    $this->baseUrl = $host;
		}

		// Helpers
		$this->dateHelpers = new DateHelpers();
		$this->functionHelpers = new FunctionHelpers();

		// Curl
		$this->curl = new Curl($this);

		// Resources
		$this->Accounts = new Accounts($this);
		$this->Applications = new Applications($this);
		$this->Users = new Users($this);
		$this->CallLists = new CallLists($this);
		$this->Scenarios = new Scenarios($this);
		$this->Rules = new Rules($this);
		$this->History = new History($this);
		$this->PSTNBlacklist = new PSTNBlacklist($this);
		$this->SIPWhiteList = new SIPWhiteList($this);
		$this->SIPRegistration = new SIPRegistration($this);
		$this->PhoneNumbers = new PhoneNumbers($this);
		$this->CallerIDs = new CallerIDs($this);
		$this->Queues = new Queues($this);
		$this->Skills = new Skills($this);
		$this->AdminUsers = new AdminUsers($this);
		$this->AdminRoles = new AdminRoles($this);
		$this->AuthorizedIPs = new AuthorizedIPs($this);
		$this->RegulationAddress = new RegulationAddress($this);
		$this->PushCredentials = new PushCredentials($this);
		$this->DialogflowCredentials = new DialogflowCredentials($this);
		$this->SMS = new SMS($this);
		$this->RecordStorages = new RecordStorages($this);
		$this->RoleSystem = new RoleSystem($this);
		$this->ChildAccounts = new ChildAccounts($this);
	}


	/**
	 * @param      $method
	 * @param      $params
	 * @param bool $filterArray
	 *
	 * @return array|mixed
	 * @throws \Exception
	 */
	public function request($method, $params, $filterArray = true)
	{
		// Remove empty params
		if ($filterArray) {
		    $params = array_filter((array)$params);
		}

		// Add account_id in params
		if (file_exists($this->tokenPath)) {
		    $tokenContent = file_get_contents($this->tokenPath);
		    if ($tokenContent) {
		        $keyContent = json_decode($tokenContent);
		        if (!empty($keyContent->account_id)) {
		            $params['account_id'] = $keyContent->account_id;
		        } elseif (!empty($keyContent->result->account_id)) {
		            $params['account_id'] = $keyContent->result->account_id;
		        }
		    }
		}

		// Date request modifier
		if ($this->requestTimeZone && !in_array($method, $this->requestTimeZoneIgnore)) {
		    $requestType = new RequestType();
		    $requestMap = $requestType->$method();
		    $params = $this->dateHelpers->dateModify($params, $requestMap, $this->requestTimeZone);
		}

		// Generate array params
		$params = $this->functionHelpers->generateArrayParams($params);

		// Generate url
		$url = 'https://' . $this->baseUrl . '/platform_api/' . $method;

		// HTTP curl request
		$result = $this->curl->send($url, $params);

		// Date result modifier
		if ($this->resultTimeZone && !in_array($method, $this->resultTimeZoneIgnore)) {
		    $resultType = new ResultType();
		    $fieldMap = $resultType->$method();
		    $result = $this->dateHelpers->dateModify($result, $fieldMap, $this->resultTimeZone);
		}

		return $result;
	}
}
