<?php

namespace Voximplant\Interfaces;

interface RoleSystemInterface
{
    /**
     * @method Creates a public/private key pair. You can optionally specify one or more roles for the key, see [this article](https://voximplant.com/blog/service-accounts-introduction) for details.
     */
    public function CreateKey(\Voximplant\Resources\Params\CreateKeyParams $params);

    /**
     * @method Gets key info of the specified account.
     */
    public function GetKeys(\Voximplant\Resources\Params\GetKeysParams $params);

    /**
     * @method Updates info of the specified key.
     */
    public function UpdateKey(\Voximplant\Resources\Params\UpdateKeyParams $params);

    /**
     * @method Deletes the specified key.
     */
    public function DeleteKey(\Voximplant\Resources\Params\DeleteKeyParams $params);

    /**
     * @method Set roles for the specified key.
     */
    public function SetKeyRoles(\Voximplant\Resources\Params\SetKeyRolesParams $params);

    /**
     * @method Gets roles of the specified key.
     */
    public function GetKeyRoles(\Voximplant\Resources\Params\GetKeyRolesParams $params);

    /**
     * @method Removes the specified roles of a key.
     */
    public function RemoveKeyRoles(\Voximplant\Resources\Params\RemoveKeyRolesParams $params);

    /**
     * @method Creates a subuser.
     */
    public function AddSubUser(\Voximplant\Resources\Params\AddSubUserParams $params);

    /**
     * @method Gets subusers.
     */
    public function GetSubUsers(\Voximplant\Resources\Params\GetSubUsersParams $params);

    /**
     * @method Edits a subuser.
     */
    public function SetSubUserInfo(\Voximplant\Resources\Params\SetSubUserInfoParams $params);

    /**
     * @method Deletes a subuser.
     */
    public function DelSubUser(\Voximplant\Resources\Params\DelSubUserParams $params);

    /**
     * @method Adds the specified roles for a subuser.
     */
    public function SetSubUserRoles(\Voximplant\Resources\Params\SetSubUserRolesParams $params);

    /**
     * @method Gets the subuser's roles.
     */
    public function GetSubUserRoles(\Voximplant\Resources\Params\GetSubUserRolesParams $params);

    /**
     * @method Removes the specified roles of a subuser.
     */
    public function RemoveSubUserRoles(\Voximplant\Resources\Params\RemoveSubUserRolesParams $params);

    /**
     * @method Gets all roles.
     */
    public function GetRoles(\Voximplant\Resources\Params\GetRolesParams $params);

    /**
     * @method Gets role groups
     */
    public function GetRoleGroups(\Voximplant\Resources\Params\GetRoleGroupsParams $params);
}
class CreateKeyReturn
{
	/** @var [KeyInfo] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetKeysReturn
{
	/** @var [KeyView] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class UpdateKeyReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DeleteKeyReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetKeyRolesReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetKeyRolesReturn
{
	/** @var [RoleView] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class RemoveKeyRolesReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class AddSubUserReturn
{
	/** @var SubUserID */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetSubUsersReturn
{
	/** @var [SubUserView] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetSubUserInfoReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DelSubUserReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetSubUserRolesReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetSubUserRolesReturn
{
	/** @var [RoleView] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class RemoveSubUserRolesReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetRolesReturn
{
	/** @var [RoleView] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetRoleGroupsReturn
{
	/** @var [RoleGroupView] */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
