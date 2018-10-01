<?php

namespace Koma136\MyTarget\Domain\V1\Remarketing;

use Koma136\MyTarget\Domain\V1\Campaign\Campaign;
use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingStat extends Remarketing
{
    /**
     * @var int
     * @Field(type="int")
     */
    private $id;

    /**
     * @var Campaign[]
     * @Field(type="array<Koma136\MyTarget\Domain\V1\Campaign\Campaign>")
     */
    private $campaigns;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Campaign[]
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }
}
