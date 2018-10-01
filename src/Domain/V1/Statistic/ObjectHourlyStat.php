<?php

namespace Koma136\MyTarget\Domain\V1\Statistic;

use Koma136\MyTarget\Mapper\Annotation\Field;

class ObjectHourlyStat extends ObjectStat
{
    /**
     * @var HourStat[]
     * @Field(name="detailed_stat", type="array<Koma136\MyTarget\Domain\V1\Statistic\HourStat>")
     */
    private $detailed;

    /**
     * @var HourStat
     * @Field(type="Koma136\MyTarget\Domain\V1\Statistic\HourStat")
     */
    private $total;

    /**
     * @return HourStat[]
     */
    public function getDetailed()
    {
        return $this->detailed;
    }

    /**
     * @return HourStat
     */
    public function getTotal()
    {
        return $this->total;
    }
}
