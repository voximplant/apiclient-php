<?php

namespace Voximplant\Interfaces;

interface AuthorizedIPsInterface
{
    /**
     * @method Adds a new authorized IP4 or network to the white/black list.
     */
    public function AddAuthorizedAccountIP(\Voximplant\Resources\Params\AddAuthorizedAccountIPParams $params);

    /**
     * @method Removes the authorized IP4 or network from the white/black list.
     */
    public function DelAuthorizedAccountIP(\Voximplant\Resources\Params\DelAuthorizedAccountIPParams $params);

    /**
     * @method Gets the authorized IP4 or network.
     */
    public function GetAuthorizedAccountIPs(\Voximplant\Resources\Params\GetAuthorizedAccountIPsParams $params);

    /**
     * @method Tests whether the IP4 is banned or allowed.
     */
    public function CheckAuthorizedAccountIP(\Voximplant\Resources\Params\CheckAuthorizedAccountIPParams $params);
}
class AddAuthorizedAccountIPReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelAuthorizedAccountIPReturn
{
    /** @var number The removed network count */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAuthorizedAccountIPsReturn
{
    /** @var [AuthorizedAccountIPType] */
    public $result;

    /** @var number The total found network count */
    public $total_count;

    /** @var number The returned network count */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class CheckAuthorizedAccountIPReturn
{
    /** @var boolean True if IP is allowed */
    public $result;

    /** @var string The matched authorized IP or network (if found) */
    public $authorized_ip;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
