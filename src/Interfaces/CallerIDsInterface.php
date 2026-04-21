<?php

namespace Voximplant\Interfaces;

interface CallerIDsInterface
{
    /**
     * @method Deletes the CallerID. Note: you cannot delete a CID permanently (the antispam defence).
     */
    public function DelCallerID(\Voximplant\Resources\Params\DelCallerIDParams $params);

    /**
     * @method Gets the account callerIDs.
     */
    public function GetCallerIDs(\Voximplant\Resources\Params\GetCallerIDsParams $params);
}
class DelCallerIDReturn
{
    /** @var number Returns 1 if the request has been completed successfully */
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
