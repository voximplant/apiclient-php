<?php

namespace Voximplant\Interfaces;

interface ScenariosInterface
{
    /**
     * @method Adds a new scenario. Please use the POST method.
     */
    public function AddScenario(\Voximplant\Resources\Params\AddScenarioParams $params);

    /**
     * @method Deletes the scenario.
     */
    public function DelScenario(\Voximplant\Resources\Params\DelScenarioParams $params);

    /**
     * @method Bind the scenario list to the rule. You should specify the application_id or application_name if you specify the rule_name.
     */
    public function BindScenario(\Voximplant\Resources\Params\BindScenarioParams $params);

    /**
     * @method Gets the account's scenarios.
     */
    public function GetScenarios(\Voximplant\Resources\Params\GetScenariosParams $params);

    /**
     * @method Edits the scenario. Please use the POST method.
     */
    public function SetScenarioInfo(\Voximplant\Resources\Params\SetScenarioInfoParams $params);

    /**
     * @method Configures the order of scenarios that are assigned to the specified rule.
     */
    public function ReorderScenarios(\Voximplant\Resources\Params\ReorderScenariosParams $params);

    /**
     * @method Runs JavaScript scenarios on a Voximplant server. The scenarios run in a new media session.
     */
    public function StartScenarios(\Voximplant\Resources\Params\StartScenariosParams $params);

    /**
     * @method Runs a session for video conferencing or joins the existing video conference session.<br/><br/>When a session is created by calling this method, a scenario assigned to the specified **rule_id** will run on one of the servers dedicated to video conferencing. All further method calls with the same **rule_id** won't create a new video conference session, but join the already existing one.<br/><br/>Use the [StartScenarios] method for creating audio conferences.
     */
    public function StartConference(\Voximplant\Resources\Params\StartConferenceParams $params);
}
class AddScenarioReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The new scenario ID. */
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

    /** @var number The total found scenario count. */
    public $total_count;

    /** @var number The returned scenario count. */
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

    /** @var string The URL to control a created media session. It can be used for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTP request on this URL will result in the [AppEvents.HttpRequest](https://voximplant.com/docs/references/voxengine/appevents#httprequest) VoxEngine event being triggered for scenario, with HTTP request data passed to it. */
    public $media_session_access_url;

    /** @var string The URL to control a created media session. It can be used for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTPS request on this URL will result in the [AppEvents.HttpRequest](https://voximplant.com/docs/references/voxengine/appevents#httprequest) VoxEngine event being triggered for scenario, with HTTP request data passed to it. */
    public $media_session_access_secure_url;

    /** @var string The URL to check media session */
    public $media_session_check_url;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class StartConferenceReturn
{
    /** @var number 1 */
    public $result;

    /** @var string The URL to control a created media session. It can be used for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTP request on this URL will result in the [AppEvents.HttpRequest](https://voximplant.com/docs/references/voxengine/appevents#httprequest) VoxEngine event being triggered for a scenario, with an HTTP request data passed to it. */
    public $media_session_access_url;

    /** @var string The URL to control a created media session. It can be used for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTPS request on this URL will result in the [AppEvents.HttpRequest](https://voximplant.com/docs/references/voxengine/appevents#httprequest) VoxEngine event being triggered for a scenario, with an HTTP request data passed to it. */
    public $media_session_access_secure_url;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
