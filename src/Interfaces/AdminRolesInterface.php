<?php

namespace Voximplant\Interfaces;

interface AdminRolesInterface
{
    /**
     * @method Adds a new admin role.
     */
    public function AddAdminRole(\Voximplant\Resources\Params\AddAdminRoleParams $params);

    /**
     * @method Deletes the specified admin role.
     */
    public function DelAdminRole(\Voximplant\Resources\Params\DelAdminRoleParams $params);

    /**
     * @method Edits the specified admin role.
     */
    public function SetAdminRoleInfo(\Voximplant\Resources\Params\SetAdminRoleInfoParams $params);

    /**
     * @method Gets the admin roles.
     */
    public function GetAdminRoles(\Voximplant\Resources\Params\GetAdminRolesParams $params);

    /**
     * @method Gets the all available admin role entries.
     */
    public function GetAvailableAdminRoleEntries(\Voximplant\Resources\Params\GetAvailableAdminRoleEntriesParams $params);
}
class AddAdminRoleReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The new admin role ID. */
    public $admin_role_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelAdminRoleReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetAdminRoleInfoReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAdminRolesReturn
{
    /** @var [AdminRoleType] */
    public $result;

    /** @var number The total found admin role count. */
    public $total_count;

    /** @var number The returned admin role count. */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAvailableAdminRoleEntriesReturn
{
    /** @var [string] Array of the admin role entries. */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
