<?php

namespace Koma136\MyTarget\Domain\V1\Banner;


use Koma136\MyTarget\Domain\V2\Creative;
use Koma136\MyTarget\Domain\V1\PeriodStat;
use Koma136\MyTarget\Mapper\Annotation\Field;

class BannerStat extends Banner
{
    /**
     * @var PeriodStat
     * @Field(name="stats", type="Koma136\MyTarget\Domain\V1\PeriodStat")
     */
    private $stats;

    /**
     * @var PeriodStat
     * @Field(name="stats_today", type="Koma136\MyTarget\Domain\V1\PeriodStat")
     */
    private $statsToday;

    /**
     * @var PeriodStat
     * @Field(name="stats_yesterday", type="Koma136\MyTarget\Domain\V1\PeriodStat")
     */
    private $statsYesterday;

    /**
     * @var PeriodStat[]
     * @Field(name="stats_full", type="array<Koma136\MyTarget\Domain\V1\PeriodStat>")
     */
    private $statsFull;

    /**
     * @return PeriodStat
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return PeriodStat
     */
    public function getStatsToday()
    {
        return $this->statsToday;
    }

    /**
     * @return PeriodStat
     */
    public function getStatsYesterday()
    {
        return $this->statsYesterday;
    }

    /**
     * @return PeriodStat[]
     */
    public function getStatsFull()
    {
        return $this->statsFull;
    }
}
