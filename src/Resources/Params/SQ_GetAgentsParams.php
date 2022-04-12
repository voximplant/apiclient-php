<?php

namespace Voximplant\Resources\Params;

class SQ_GetAgentsParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of smart queue IDs separated by the ';' symbol. Use 'all' to select all the queues */
    public $sq_queue_id;

    /** @var stringlist List of smart queue names separated by the ';' symbol. Can be used instead of sq_queue_id */
    public $sq_queue_name;

    /** @var number ID of the smart queue to exclude */
    public $excluded_sq_queue_id;

    /** @var string Name of the smart queue to exclude. Can be used instead of excluded_sq_queue_id */
    public $excluded_sq_queue_name;

    /** @var Object Skills to filter in the json array format. The array should contain objects with the sq_skill_id/sq_skill_name, min_sq_skill_level, and max_sq_skill_level keys where skill levels range from 1 to 5 */
    public $sq_skills;

    /** @var intlist List of user IDs separated by the ';' symbol */
    public $user_id;

    /** @var stringlist List of user names separated by the ';' symbol. Can be used instead of user_id */
    public $user_name;

    /** @var string Substring of the user name to filter */
    public $user_name_template;

    /** @var Object Filter statuses in the json array format. The array should contain objects with the sq_status_type and sq_status_name keys. Possible values for sq_status_type are 'CALL' and'IM'. Possible values for sq_status_name are 'OFFLINE', 'ONLINE', 'READY', 'IN_SERVICE', 'AFTER_SERVICE', 'DND' */
    public $sq_statuses;

    /** @var boolean Display agent skills */
    public $with_sq_skills;

    /** @var boolean Display agent queues */
    public $with_sq_queues;

    /** @var boolean Display agent current statuses */
    public $with_sq_statuses;

    /** @var number Number of items to show in the output */
    public $count;

    /** @var number Number of items to skip in the output */
    public $offset;
}
