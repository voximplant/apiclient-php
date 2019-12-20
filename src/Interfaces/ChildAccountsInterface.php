<?php

namespace Voximplant\Interfaces;

interface ChildAccountsInterface
{
    /**
     * @method Adds a new subscription for the specified child account.
     */
    public function AddChildAccountSubscription(\Voximplant\Resources\Params\AddChildAccountSubscriptionParams $params);

    /**
     * @method Gets the active subscription(s) for the specified child account.
     */
    public function GetChildAccountSubscriptions(\Voximplant\Resources\Params\GetChildAccountSubscriptionsParams $params);

    /**
     * @method Gets all the eligible subscription templates. A template is considered to be eligible if it is of a type that supports child accounts management.
     */
    public function GetChildAccountSubscriptionTemplates(\Voximplant\Resources\Params\GetChildAccountSubscriptionTemplatesParams $params);

    /**
     * @method Deactivates the specified subscription(s).
     */
    public function DeactivateChildAccountSubscription(\Voximplant\Resources\Params\DeactivateChildAccountSubscriptionParams $params);
}
class AddChildAccountSubscriptionReturn
{
    /** @var number */
    public $result;

    /** @var [ChildAccountSubscriptionType] */
    public $subscriptions;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetChildAccountSubscriptionsReturn
{
    /** @var [ChildAccountSubscriptionType] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetChildAccountSubscriptionTemplatesReturn
{
    /** @var [ChildAccountSubscriptionTemplateType] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DeactivateChildAccountSubscriptionReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
