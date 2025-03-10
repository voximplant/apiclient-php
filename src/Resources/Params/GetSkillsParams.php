<?php

namespace Voximplant\Resources\Params;

class GetSkillsParams
{
    /** @var number The skill ID to filter */
    public $skill_id;

    /** @var string The skill name part to filter */
    public $skill_name;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;
}
