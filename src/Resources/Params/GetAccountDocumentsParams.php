<?php

namespace Voximplant\Resources\Params;

class GetAccountDocumentsParams
{
    /** @var boolean Set true to view the uploaded document statuses. (The flag is ignored with the child_account_id=all) */
    public $with_details;

    /** @var string The required account verification name to filter */
    public $verification_name;

    /** @var stringlist The account verification status list separated by semicolon (;). The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED */
    public $verification_status;

    /** @var date Unverified subscriptions hold until the date (from ...) in format: YYYY-MM-DD */
    public $from_unverified_hold_until;

    /** @var date Unverified subscriptions hold until the date (... to) in format: YYYY-MM-DD */
    public $to_unverified_hold_until;

    /** @var intlist The child account ID list separated by semicolon (;). Use the 'all' value to select all child accounts */
    public $child_account_id;

    /** @var boolean Set true to get the children account verifications only */
    public $children_verifications_only;

    public function toArray()
    {
        return [
                'with_details' => $this->with_details !== null ? (filter_var($this->with_details, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'verification_name' => $this->verification_name,
                    'verification_status' => $this->verification_status,
                    'from_unverified_hold_until' => $this->from_unverified_hold_until,
                    'to_unverified_hold_until' => $this->to_unverified_hold_until,
                    'child_account_id' => $this->child_account_id,
                    'children_verifications_only' => $this->children_verifications_only !== null ? (filter_var($this->children_verifications_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
