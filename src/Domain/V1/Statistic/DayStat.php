<?php

namespace Koma136\MyTarget\Domain\V1\Statistic;

use Koma136\MyTarget\Mapper\Annotation\Field;

class DayStat extends StatisticRow
{
    /**
     * @var \DateTimeImmutable
     * @Field(type="DateTime<d.m.Y|>")
     */
    private $date;

    /**
     * @return \DateTimeImmutable
     */
    public function getDate()
    {
        return $this->date;
    }
}
