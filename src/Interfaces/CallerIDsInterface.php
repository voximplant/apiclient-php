<?php

namespace Voximplant\Interfaces;

interface CallerIDsInterface
{
    /**
     * @method Adds a new caller ID. Caller ID is the phone that is displayed to the called user. This number can be used for call back.
     */
    public function AddCallerID(\Voximplant\Resources\Params\AddCallerIDParams $params);

    /**
     * @method Activates the CallerID by the verification code.
     */
    public function ActivateCallerID(\Voximplant\Resources\Params\ActivateCallerIDParams $params);

    /**
     * @method Deletes the CallerID. Note: you cannot delete a CID permanently (the antispam defence).
     */
    public function DelCallerID(\Voximplant\Resources\Params\DelCallerIDParams $params);

    /**
     * @method Gets the account callerIDs.
     */
    public function GetCallerIDs(\Voximplant\Resources\Params\GetCallerIDsParams $params);

    /**
     * @method Gets a verification code via phone call to the **callerid_number**.
     */
    public function VerifyCallerID(\Voximplant\Resources\Params\VerifyCallerIDParams $params);
}
class AddCallerIDReturn
{
    /** @var number 1 */
    public $result;

    /** @var number ID of the callerID object */
    public $callerid_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class ActivateCallerIDReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelCallerIDReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetCallerIDsReturn
{
    /** @var [CallerIDInfoType] */
    public $result;

    /** @var number The total found record count */
    public $total_count;

    /** @var number The returned record count */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class VerifyCallerIDReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
