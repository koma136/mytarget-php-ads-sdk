<?php

namespace Koma136\MyTarget\Operator\V2\Remarketing;

use Koma136\MyTarget\Domain\V2\Audience\Segment;
use Koma136\MyTarget\Domain\V2\Audience\Segments;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget as f;

/**
 * Class SegmentsOperator
 * @package Koma136\MyTarget\Operator\V2\Remarketing
 */
class SegmentsOperator
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;

    /**
     * SegmentsOperator constructor.
     * @param Client $client
     * @param Mapper $mapper
     */
    public function __construct(Client $client, Mapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param Segment $segment
     * @param Context|null $context
     * @return Segment
     */
    public function create(Segment $segment, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_CREATE);
        $rawSegment = $this->mapper->snapshot($segment);

        $json = $this->client->post("/api/v2/remarketing/segments.json", null, $rawSegment, $context);

        return $this->mapper->hydrateNew(Segment::class, $json);
    }

    /**
     * @param $id
     * @param Segment $segment
     * @param Context|null $context
     * @return Segment
     */
    public function update($id, Segment $segment, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_CREATE);
        $rawSegment = $this->mapper->snapshot($segment);

        $json = $this->client->post(sprintf("/api/v2/remarketing/segments/%d.json", $id), null, $rawSegment, $context);

        return $this->mapper->hydrateNew(Segment::class, $json);
    }

    /**
     * @param Context|null $context
     * @return Segments
     */
    public function all(Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);

        $json = $this->client->get("/api/v2/remarketing/segments.json", null, $context);

        return $this->mapper->hydrateNew(Segments::class, $json);
    }
}