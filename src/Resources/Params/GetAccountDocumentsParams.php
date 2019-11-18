<?php

namespace Voximplant\Resources\Params;

class GetAccountDocumentsParams
{
    /** @var boolean Set true to view the uploaded document statuses. (The flag is ignored with the child_account_id=all) */
    public $with_details;

    /** @var string The required account verification name to filter. */
    public $verification_name;

    /** @var stringlist The account verification status list separated by the ';' symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED */
    public $verification_status;

    /** @var date Unverified subscriptions hold until the date (from ...) in format: YYYY-MM-DD */
    public $from_unverified_hold_until;

    /** @var date Unverified subscriptions hold until the date (... to) in format: YYYY-MM-DD */
    public $to_unverified_hold_until;

    /** @var intlist The child account ID list separated by the ';' symbol or the 'all' value. */
    public $child_account_id;

    /** @var boolean Set true to get the children account verifications only. */
    public $children_verifications_only;
}
