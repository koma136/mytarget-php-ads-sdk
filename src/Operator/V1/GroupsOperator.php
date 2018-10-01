<?php

namespace Koma136\MyTarget\Operator\V1;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V1\OdklGroup;
use Koma136\MyTarget\Domain\V1\VkGroup;
use Koma136\MyTarget\Mapper\Mapper;

class GroupsOperator
{
    const LIMIT_FIND_ODKL = "groups-find-odkl";
    const LIMIT_FIND_VK = "groups-find-vk";

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
     * @param string $query
     * @param int $limit
     * @param Context|null $context
     *
     * @return OdklGroup[]
     */
    public function getOdklGroups($query, $limit = 10, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND_ODKL);

        $json = $this->client->get("/api/v1/odkl_groups.json", ["q" => $query, "limit" => $limit], $context);

        return array_map(function ($json) {
            return $this->mapper->hydrateNew(OdklGroup::class, $json);
        }, $json);
    }

    /**
     * @param string $query
     * @param Context|null $context
     *
     * @return VkGroup[]
     */
    public function getVkGroups($query, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND_VK);

        $json = $this->client->get("/api/v1/vk_groups.json", ["q" => $query], $context);

        return array_map(function ($json) {
            return $this->mapper->hydrateNew(VkGroup::class, $json);
        }, $json);
    }
}
