<?php

namespace Koma136\MyTarget\Operator\V2;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V2\Campaign\Package;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget\Domain\V2\Enum\Status;

class PackagesOperator
{
    const LIMIT_FIND = "packages-find";

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
     * @param Context|null $context
     * @return Package[]
     */
    public function all(Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);
        $json = $this->client->get('/api/v2/packages.json', $query, $context);
        return array_map(function ($json) {
            return $this->mapper->hydrateNew(Package::class, $json);
        }, $json['items']);
    }
 /**
     * @param Context|null $context
     * @return Package[]
     */
    public function allActive(Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);
        $json = $this->client->get('/api/v2/packages.json', $query, $context);
        return array_filter(array_map(function ($json) {
            if($json['status'] == Status::ACTIVE)
            return $this->mapper->hydrateNew(Package::class, $json);
        }, $json['items']));
    }

}
