<?php

namespace Voximplant\Interfaces;

interface PushCredentialsInterface
{
    /**
     * @method Adds push credentials
     */
    public function AddPushCredential(\Voximplant\Resources\Params\AddPushCredentialParams $params);

    /**
     * @method Modifies push credentials
     */
    public function SetPushCredential(\Voximplant\Resources\Params\SetPushCredentialParams $params);

    /**
     * @method Removes push credentials
     */
    public function DelPushCredential(\Voximplant\Resources\Params\DelPushCredentialParams $params);

    /**
     * @method Gets push credentials
     */
    public function GetPushCredential(\Voximplant\Resources\Params\GetPushCredentialParams $params);

    /**
     * @method Binds push credentials to applications
     */
    public function BindPushCredential(\Voximplant\Resources\Params\BindPushCredentialParams $params);
}
class AddPushCredentialReturn
{
    /** @var number */
    public $result;

    /** @var number */
    public $push_credential_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetPushCredentialReturn
{
    /** @var number */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelPushCredentialReturn
{
    /** @var number */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetPushCredentialReturn
{
    /** @var [PushCredentialInfo] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class BindPushCredentialReturn
{
    /** @var number */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
