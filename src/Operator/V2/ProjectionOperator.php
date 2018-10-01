<?php

namespace Koma136\MyTarget\Operator\V2;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V2\Campaign\Projection\Projection;
use Koma136\MyTarget\Domain\V2\Campaign\Projection\ProjectionSettings;
use Koma136\MyTarget\Mapper\Mapper;

class ProjectionOperator
{
    const LIMIT_PROJECTION = "v2-projection";

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
     * @param ProjectionSettings $campaign
     * @param Context|null       $context
     *
     * @return Projection
     */
    public function projection(ProjectionSettings $campaign, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_PROJECTION);
        $data = $this->mapper->snapshot($campaign);

        $json = $this->client->post("/api/v2/projection.json", null, $data, $context);

        return $this->mapper->hydrateNew(Projection::class, $json);
    }
}
