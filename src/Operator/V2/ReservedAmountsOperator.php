<?php

namespace Koma136\MyTarget\Operator\V2;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V2\ReservedAmount;
use Koma136\MyTarget\Mapper\Mapper;

class ReservedAmountsOperator
{
    const LIMIT_FIND = "v2-reserved-amounts-find";

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
     * @param int $clientId
     * @param Context|null $context
     *
     * @return ReservedAmount[]
     */
    public function find($clientId, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);
        $uri = sprintf("/api/v2/reserved_amounts/%d.json", $clientId);
        $json = $this->client->get($uri, null, $context);

        if (isset($json["reserved_amounts"])) {
            return array_map(function ($json) {
                return $this->mapper->hydrateNew(ReservedAmount::class, $json);
            }, $json["reserved_amounts"]);
        }

        return [];
    }
}
