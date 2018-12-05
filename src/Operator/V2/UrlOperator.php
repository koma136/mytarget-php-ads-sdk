<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 04.12.18
 * Time: 14:06
 */

namespace Koma136\MyTarget\Operator\V2;


use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V2\Banner\Url;
use Koma136\MyTarget\Mapper\Mapper;

/**
 * Class UrlOperator
 * @package Koma136\MyTarget\Operator\V2
 */
class UrlOperator
{
    const LIMIT_CREATE = "urls-create";

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;

    /**
     * UrlsOperator constructor.
     * @param Client $client
     * @param Mapper $mapper
     */
    public function __construct(Client $client, Mapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param Url $url
     * @param Context|null $context
     * @return Url
     */
    public function create(Url $url, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_CREATE);
        $rawUrl = $this->mapper->snapshot($url);

        $json = $this->client->post("/api/v2/urls.json", null, $rawUrl, $context);

        return $this->mapper->hydrateNew(Url::class, $json);
    }
}