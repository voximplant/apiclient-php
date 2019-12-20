<?php

namespace Voximplant\Interfaces;

interface PushCredentialsInterface
{
    /**
     * @method Add push credentials
     */
    public function AddPushCredential(\Voximplant\Resources\Params\AddPushCredentialParams $params);

    /**
     * @method Modify push credentials
     */
    public function SetPushCredential(\Voximplant\Resources\Params\SetPushCredentialParams $params);

    /**
     * @method Remove push credentials
     */
    public function DelPushCredential(\Voximplant\Resources\Params\DelPushCredentialParams $params);

    /**
     * @method Get push credentials
     */
    public function GetPushCredential(\Voximplant\Resources\Params\GetPushCredentialParams $params);

    /**
     * @method Bind push credentials to applications
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
