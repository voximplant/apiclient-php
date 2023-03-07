<?php

namespace Voximplant\Interfaces;

interface ScenariosInterface
{
    /**
     * @method Adds a new scenario to the <a href="https://voximplant.com/docs/gettingstarted/basicconcepts/scenarios#shared-scenarios">Shared</a> folder, so the scenario is available in all the existing applications. Please use the POST method.
     */
    public function AddScenario(\Voximplant\Resources\Params\AddScenarioParams $params);

    /**
     * @method Deletes the scenario.
     */
    public function DelScenario(\Voximplant\Resources\Params\DelScenarioParams $params);

    /**
     * @method Bind the scenario list to the rule. You should specify the application_id or application_name if you specify the rule_name. Please note, the scenario and the routing rule need to be within the same application.
     */
    public function BindScenario(\Voximplant\Resources\Params\BindScenarioParams $params);

    /**
     * @method Gets the account's scenarios.
     */
    public function GetScenarios(\Voximplant\Resources\Params\GetScenariosParams $params);

    /**
     * @method Edits the scenario. You can edit the scenario's name and body. Please use the POST method.
     */
    public function SetScenarioInfo(\Voximplant\Resources\Params\SetScenarioInfoParams $params);

    /**
     * @method Configures the order of scenarios that are assigned to the specified rule.
     */
    public function ReorderScenarios(\Voximplant\Resources\Params\ReorderScenariosParams $params);

    /**
     * @method Runs JavaScript scenarios on a Voximplant server. The scenarios run in a new media session. To start a scenario, pass the routing rule ID associated with the necessary scenario. You can use both GET and POST requests, but we recommend using the POST mode if you pass some data in the custom_data field. The maximum number of simultaneous requests is 200. If you exceed this number, you get the 429 error code.
     */
    public function StartScenarios(\Voximplant\Resources\Params\StartScenariosParams $params);

    /**
     * @method Runs a session for video conferencing or joins the existing video conference session.<br/><br/>When you create a session by calling this method, a scenario runs on one of the servers dedicated to video conferencing. All further method calls with the same **conference_name** won't create a new video conference session but join the existing one.<br/><br/>Use the [StartScenarios] method for creating audio conferences.
     */
    public function StartConference(\Voximplant\Resources\Params\StartConferenceParams $params);
}
class AddScenarioReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The new scenario ID */
    public $scenario_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelScenarioReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class BindScenarioReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetScenariosReturn
{
    /** @var [ScenarioInfoType] */
    public $result;

    /** @var number The total found scenario count */
    public $total_count;

    /** @var number The returned scenario count */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetScenarioInfoReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class ReorderScenariosReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class StartScenariosReturn
{
    /** @var number 1 */
    public $result;

    /** @var string The URL to control a created media session. You can use it for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTP request on this URL will result in the [AppEvents.HttpRequest](/docs/references/voxengine/appevents#httprequest) VoxEngine event being triggered for scenario, with HTTP request data passed to it */
    public $media_session_access_url;

    /** @var string The URL to control a created media session. You can use it for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTPS request on this URL will result in the [AppEvents.HttpRequest](/docs/references/voxengine/appevents#httprequest) VoxEngine event being triggered for scenario, with HTTP request data passed to it */
    public $media_session_access_secure_url;

    /** @var string The URL to check media session */
    public $media_session_check_url;

    /** @var number The call session history ID. To search a call session result, paste the ID to the GetCallHistory method's call_session_history_id parameter */
    public $call_session_history_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class StartConferenceReturn
{
    /** @var number 1 */
    public $result;

    /** @var string The URL to control a created media session. It can be used for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTP request on this URL will result in the [AppEvents.HttpRequest](/docs/references/voxengine/appevents#httprequest) VoxEngine event being triggered for a scenario, with an HTTP request data passed to it */
    public $media_session_access_url;

    /** @var string The URL to control a created media session. It can be used for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTPS request on this URL will result in the [AppEvents.HttpRequest](/docs/references/voxengine/appevents#httprequest) VoxEngine event being triggered for a scenario, with an HTTP request data passed to it */
    public $media_session_access_secure_url;

    /** @var number The call session history ID. To search a call session result, paste the ID to the GetCallHistory method's call_session_history_id parameter */
    public $call_session_history_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
