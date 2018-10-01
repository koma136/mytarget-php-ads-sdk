<?php

namespace Koma136\MyTarget\Operator\V1;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Domain\DateRange;
use Koma136\MyTarget\Domain\V1\Demography\DetailedExactDemographyCampaigns;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget as f;
use Koma136\MyTarget\Context;

class DetailedExactDemographyOperator
{
    const LIMIT_FIND = "detailed-exact-demography-find";

    const DATE_FORMAT = "d.m.Y";

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;

    /**
     * @param Client $client
     * @param Mapper $mapper
     */
    public function __construct(Client $client, Mapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param array      $ids
     * @param DateRange  $dateRange
     * @param Context|null $context
     *
     * @return DetailedExactDemographyCampaigns
     */
    public function findAll(array $ids, DateRange $dateRange, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);
        $query = [
            'date_from' => $dateRange->getFrom()->format(self::DATE_FORMAT),
            'date_to' => $dateRange->getTo()->format(self::DATE_FORMAT),
        ];

        $path = sprintf('/api/v1/statistics/campaigns/%s/detailed_exact_demography.json', implode(';', $ids));

        $json = $this->client->get($path, $query, $context);
        $json = f\objects_array_fixup($json, count($ids));

        return $this->mapper->hydrateNew(DetailedExactDemographyCampaigns::class, $json);
    }
}
