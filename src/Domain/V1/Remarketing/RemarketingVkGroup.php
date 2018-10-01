<?php

namespace Koma136\MyTarget\Domain\V1\Remarketing;

use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingVkGroup
{
    /**
     * @var int
     * @Field(name="group_id", type="int")
     */
    private $groupId;

    /**
     * @param int $groupId
     */
    public function __construct($groupId)
    {
        $this->groupId = $groupId;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}
