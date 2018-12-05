<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 29.11.18
 * Time: 16:24
 */

namespace Koma136\MyTarget\Operator\V2;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V2\Banner\BannerFormat;
use Koma136\MyTarget\Mapper\Mapper;

/**
 * Class BannerFormatsOperator
 * @package Koma136\MyTarget\Operator\V2
 */
class BannerFormatsOperator
{
    const LIMIT_FIND = "banner_formats-find";

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;
    /**
     * @var BannerFormat[]
     */
    private $banner_formats;
    /**
     * BannerFormatsOperator constructor.
     * @param Client $client
     * @param Mapper $mapper
     */
    public function __construct(Client $client, Mapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param Context|null $context
     * @return BannerFormat
     */
    public function find( int $id)
    {
        return array_key_exists($id, $this->banner_formats)?$this->banner_formats[$id]:null;
    }

    /**
     * @param Context|null $context
     * @return $this
     */
    public function query( Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);

        $json = $this->client->get('/api/v2/banner_formats.json', null, $context);

        $banner_formats = array_map(function ($json) {
                return $this->mapper->hydrateNew(BannerFormat::class, $json);
        }, $json['items']);

        foreach ($banner_formats as $banner_format){
            $this->banner_formats[$banner_format->getId()]=$banner_format;
        }

        return $this;
    }





}