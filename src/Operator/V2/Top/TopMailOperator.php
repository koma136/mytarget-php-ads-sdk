<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 22.11.18
 * Time: 12:25
 */

namespace Koma136\MyTarget\Operator\V2\Top;

use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V2\Top\TopMailCategory;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget\Client;
use Koma136\MyTarget\Domain\V2\Top\TopMailCounter;
use Koma136\MyTarget\Domain\V2\Top\TopMailResponse;

/**
 * Class TopMailOperator
 * @package Koma136\MyTarget\Operator\V2\Top
 */
class TopMailOperator
{
    const TopMail = "top-mail";
    /**
     * @var string
     */
    private $apikey;
    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;

    /**
     * TopMailOperator constructor.
     * @param string $apikey
     * @param Client $client
     * @param Mapper $mapper
     */
    public function __construct(string $apikey, Client $client, Mapper $mapper)
    {
        $this->apikey = $apikey;
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param TopMailCounter $counter
     * @return TopMailResponse
     */
    public function add(TopMailCounter $counter,Context $context = null)
    {
        $context = Context::withLimitBy($context, self::TopMail);
        $rawCounter = $this->mapper->snapshot($counter);
        $rawCounter['apikey'] = $this->apikey;

        $json = $this->client->get("json/add", $rawCounter,$context);
        return $this->mapper->hydrateNew(TopMailResponse::class, $json);
    }

    /**
     * @param int $id
     * @param TopMailCounter $counter
     * @return TopMailResponse
     */
    public function edit(int $id,TopMailCounter $counter,Context $context = null)
    {
        $context = Context::withLimitBy($context, self::TopMail);
        $rawCounter = $this->mapper->snapshot($counter);
        $rawCounter['id'] = $id;

        $json = $this->client->get("json/edit", $rawCounter,$context);

        return $this->mapper->hydrateNew(TopMailResponse::class, $json);
    }
    /**
     * @return TopMailCategory[]
     */
    public function getCategories(Context $context = null)
    {
        $context = Context::withLimitBy($context, self::TopMail);
        $json = $this->client->get("json/categories",   null,$context);
        return array_map(function ($json) {
            return $this->mapper->hydrateNew(TopMailCategory::class, $json);
        }, $json['categories']);
    }

}