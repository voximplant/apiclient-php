<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddScenarioReturn;
use Voximplant\Interfaces\BindScenarioReturn;
use Voximplant\Interfaces\DelScenarioReturn;
use Voximplant\Interfaces\GetScenariosReturn;
use Voximplant\Interfaces\ReorderScenariosReturn;
use Voximplant\Interfaces\ScenariosInterface;
use Voximplant\Interfaces\SetScenarioInfoReturn;
use Voximplant\Interfaces\StartConferenceReturn;
use Voximplant\Interfaces\StartScenariosReturn;

class Scenarios implements ScenariosInterface
{
    protected $client;

    /** @object AddScenario */
    protected $AddScenarioReturn;

    /** @object DelScenario */
    protected $DelScenarioReturn;

    /** @object BindScenario */
    protected $BindScenarioReturn;

    /** @object GetScenarios */
    protected $GetScenariosReturn;

    /** @object SetScenarioInfo */
    protected $SetScenarioInfoReturn;

    /** @object ReorderScenarios */
    protected $ReorderScenariosReturn;

    /** @object StartScenarios */
    protected $StartScenariosReturn;

    /** @object StartConference */
    protected $StartConferenceReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddScenarioReturn = new AddScenarioReturn();
        $this->DelScenarioReturn = new DelScenarioReturn();
        $this->BindScenarioReturn = new BindScenarioReturn();
        $this->GetScenariosReturn = new GetScenariosReturn();
        $this->SetScenarioInfoReturn = new SetScenarioInfoReturn();
        $this->ReorderScenariosReturn = new ReorderScenariosReturn();
        $this->StartScenariosReturn = new StartScenariosReturn();
        $this->StartConferenceReturn = new StartConferenceReturn();
    }

    /**
     * @method Adds a new scenario to the Shared folder, so the scenario is available in all the existing applications. Please use the POST method.
     */
    public function AddScenario(Params\AddScenarioParams $params = null): AddScenarioReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddScenarioReturn->$key = $value;
        }
        return $this->AddScenarioReturn;
    }

    /**
     * @method Deletes the scenario.
     */
    public function DelScenario(Params\DelScenarioParams $params = null): DelScenarioReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelScenarioReturn->$key = $value;
        }
        return $this->DelScenarioReturn;
    }

    /**
     * @method Bind the scenario list to the rule. You should specify the application_id or application_name if you specify the rule_name. Please note, the scenario and the routing rule need to be within the same application.
     */
    public function BindScenario(Params\BindScenarioParams $params = null): BindScenarioReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->BindScenarioReturn->$key = $value;
        }
        return $this->BindScenarioReturn;
    }

    /**
     * @method Gets the account's scenarios.
     */
    public function GetScenarios(Params\GetScenariosParams $params = null): GetScenariosReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetScenariosReturn->$key = $value;
        }
        return $this->GetScenariosReturn;
    }

    /**
     * @method Edits the scenario. You can edit the scenario's name and body. Please use the POST method.
     */
    public function SetScenarioInfo(Params\SetScenarioInfoParams $params = null): SetScenarioInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetScenarioInfoReturn->$key = $value;
        }
        return $this->SetScenarioInfoReturn;
    }

    /**
     * @method Configures the order of scenarios that are assigned to the specified rule.
     */
    public function ReorderScenarios(Params\ReorderScenariosParams $params = null): ReorderScenariosReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->ReorderScenariosReturn->$key = $value;
        }
        return $this->ReorderScenariosReturn;
    }

    /**
     * @method Runs JavaScript scenarios on a Voximplant server. The scenarios run in a new media session. To start a scenario, pass the routing rule ID associated with the necessary scenario. You can use both GET and POST requests, but we recommend using the POST mode if you pass some data in the custom_data field. The maximum number of simultaneous requests is 200. If you exceed this number, you get the 429 error code.
     */
    public function StartScenarios(Params\StartScenariosParams $params = null): StartScenariosReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->StartScenariosReturn->$key = $value;
        }
        return $this->StartScenariosReturn;
    }

    /**
     * @method Runs a session for video conferencing or joins the existing video conference session.When you create a session by calling this method, a scenario runs on one of the servers dedicated to video conferencing. All further method calls with the same **conference_name** won't create a new video conference session but join the existing one.Use the [StartScenarios] method for creating audio conferences.
     */
    public function StartConference(Params\StartConferenceParams $params = null): StartConferenceReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->StartConferenceReturn->$key = $value;
        }
        return $this->StartConferenceReturn;
    }
}
