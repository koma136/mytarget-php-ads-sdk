<?php

namespace Koma136\MyTarget\Domain\V1\Remarketing;

use Koma136\MyTarget\Domain\V1\Enum\RemarketingType;
use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingItemUserList
{
    /**
     * @var int
     * @Field(name="remarketing_users_list_id", type="int")
     */
    private $id;

    /**
     * @var RemarketingType
     * @Field(type="Koma136\MyTarget\Domain\V1\Enum\RemarketingType")
     */
    private $type;

    /**
     * @param int $id
     * @param RemarketingType $type
     */
    public function __construct($id, RemarketingType $type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return RemarketingType
     */
    public function getType()
    {
        return $this->type;
    }
}
