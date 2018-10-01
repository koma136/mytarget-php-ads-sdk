<?php

namespace Koma136\MyTarget\Domain\V1\Statistic;

use Koma136\MyTarget\Mapper\Annotation\Field;

class ObjectDailyStat extends ObjectStat
{
    /**
     * @var DayStat[]
     * @Field(name="detailed_stat", type="array<Koma136\MyTarget\Domain\V1\Statistic\DayStat>")
     */
    private $detailed;

    /**
     * @var DayStat
     * @Field(type="Koma136\MyTarget\Domain\V1\Statistic\DayStat")
     */
    private $total;

    /**
     * @return DayStat[]
     */
    public function getDetailed()
    {
        return $this->detailed;
    }

    /**
     * @return DayStat
     */
    public function getTotal()
    {
        return $this->total;
    }
}
