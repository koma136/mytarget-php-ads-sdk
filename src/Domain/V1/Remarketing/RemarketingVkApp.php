<?php

namespace Koma136\MyTarget\Domain\V1\Remarketing;

use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingVkApp
{
    /**
     * @var int
     * @Field(name="app_id", type="int")
     */
    private $appId;

    /**
     * @param int $appId
     */
    public function __construct($appId)
    {
        $this->appId = $appId;
    }

    /**
     * @return int
     */
    public function getAppId()
    {
        return $this->appId;
    }
}
