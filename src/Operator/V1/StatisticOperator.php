<?php

namespace Koma136\MyTarget\Operator\V1;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Domain\DateRange;
use Koma136\MyTarget\Domain\V1\Enum\ObjectType;
use Koma136\MyTarget\Domain\V1\Enum\StatisticType;
use Koma136\MyTarget\Domain\V1\Statistic\ObjectDailyStat;
use Koma136\MyTarget\Domain\V1\Statistic\ObjectHourlyStat;
use Koma136\MyTarget\Domain\V1\Statistic\ObjectStat;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget\Context;
use Koma136\MyTarget as f;

class StatisticOperator
{
    const LIMIT_FIND = "statistic-find";

    const DATE_FORMAT = "d.m.Y";

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;

    public function __construct(Client $client, Mapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param int $id
     * @param ObjectType $objectType
     * @param StatisticType $statType
     * @param DateRange|null $datesPredicate
     * @param Context|null $context
     *
     * @return ObjectStat
     */
    public function one($id, ObjectType $objectType, StatisticType $statType, DateRange $datesPredicate = null, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);
        $path = $this->path($id, $objectType, $statType, $datesPredicate);
        $json = $this->client->get($path, null, $context);

        $type = $statType === StatisticType::day() ? ObjectDailyStat::class : ObjectHourlyStat::class;
        return $this->mapper->hydrateNew($type, $json);
    }

    /**
     * @param int[] $ids
     * @param ObjectType $objectType
     * @param StatisticType $statType
     * @param DateRange|null $datesPredicate
     * @param Context|null $context
     *
     * @return ObjectStat[]
     */
    public function all(array $ids, ObjectType $objectType, StatisticType $statType, DateRange $datesPredicate = null, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);
        $path = $this->path($ids, $objectType, $statType, $datesPredicate);
        $json = $this->client->get($path, null, $context);
        $json = f\objects_array_fixup($json, count($ids));

        $type = $statType === StatisticType::day() ? ObjectDailyStat::class : ObjectHourlyStat::class;
        return array_map(function ($json) use ($type) {
            return $this->mapper->hydrateNew($type, $json);
        }, $json);
    }

    private function path($ids, ObjectType $objectType, StatisticType $statType, DateRange $datesPredicate = null)
    {
        $ids = is_array($ids) ? implode(";", $ids) : $ids;
        $path = sprintf("/api/v1/statistics/%s/%s/%s", $objectType->getValue(), $ids, $statType->getValue());

        if ($datesPredicate) {
            $path .= sprintf("/%s-%s",
                $datesPredicate->getFrom()->format(self::DATE_FORMAT),
                $datesPredicate->getTo()->format(self::DATE_FORMAT));
        }

        return $path . ".json";
    }
}
