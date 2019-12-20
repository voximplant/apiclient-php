<?php

namespace Voximplant\Interfaces;

interface PSTNBlacklistInterface
{
    /**
     * @method Add a new phone number to the PSTN blacklist. BlackList works for numbers that are purchased from Voximplant only. Since we have no control over exact phone number format for calls from SIP integrations, blacklisting such numbers should be done via JavaScript scenarios.
     */
    public function AddPstnBlackListItem(\Voximplant\Resources\Params\AddPstnBlackListItemParams $params);

    /**
     * @method Update the PSTN blacklist item. BlackList works for numbers that are purchased from Voximplant only. Since we have no control over exact phone number format for calls from SIP integrations, blacklisting such numbers should be done via JavaScript scenarios.
     */
    public function SetPstnBlackListItem(\Voximplant\Resources\Params\SetPstnBlackListItemParams $params);

    /**
     * @method Remove phone number from the PSTN blacklist.
     */
    public function DelPstnBlackListItem(\Voximplant\Resources\Params\DelPstnBlackListItemParams $params);

    /**
     * @method Get the whole PSTN blacklist.
     */
    public function GetPstnBlackList(\Voximplant\Resources\Params\GetPstnBlackListParams $params);
}
class AddPstnBlackListItemReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The PSTN black list item ID. */
    public $pstn_blacklist_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetPstnBlackListItemReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelPstnBlackListItemReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetPstnBlackListReturn
{
    /** @var [PstnBlackListInfoType] */
    public $result;

    /** @var number The total found phone numbers count. */
    public $total_count;

    /** @var number The returned phone numbers count. */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
