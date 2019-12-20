<?php

namespace Voximplant\Interfaces;

interface ApplicationsInterface
{
    /**
     * @method Adds a new account's application.
     */
    public function AddApplication(\Voximplant\Resources\Params\AddApplicationParams $params);

    /**
     * @method Deletes the account's application.
     */
    public function DelApplication(\Voximplant\Resources\Params\DelApplicationParams $params);

    /**
     * @method Edits the account's application.
     */
    public function SetApplicationInfo(\Voximplant\Resources\Params\SetApplicationInfoParams $params);

    /**
     * @method Gets the account's applications.
     */
    public function GetApplications(\Voximplant\Resources\Params\GetApplicationsParams $params);
}
class AddApplicationReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The application ID */
    public $application_id;

    /** @var string The full application name */
    public $application_name;

    /** @var boolean This flag indicates whether a secure storage for logs and records is enabled or not. */
    public $secure_record_storage;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelApplicationReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetApplicationInfoReturn
{
    /** @var number 1 */
    public $result;

    /** @var string The new full application name */
    public $application_name;

    /** @var boolean This flag indicates whether a secure storage for logs and records is enabled or not. */
    public $secure_record_storage;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetApplicationsReturn
{
    /** @var [ApplicationInfoType] */
    public $result;

    /** @var number The total found application count. */
    public $total_count;

    /** @var number The returned application count. */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
