<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 28.11.18
 * Time: 9:50
 */

namespace Koma136\MyTarget\Operator\V2;
use Koma136\MyTarget\Domain\V2\Banner\Content;
use Koma136\MyTarget\Domain\V2\Enum\ContentType;
use Koma136\MyTarget\Mapper\Mapper;
use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget as f;
use yii\helpers\Json;

class ContentOperator
{
    const LIMIT_UPLOAD = "context-upload";
    /**
     * @var Client
     */
    private $client;

    /**
     * @var Mapper
     */
    private $mapper;

    /**
     * ContentOperator constructor.
     * @param Client $client
     * @param Mapper $mapper
     */
    public function __construct(Client $client, Mapper $mapper)
    {
        $this->client = $client;
        $this->mapper = $mapper;
    }

    /**
     * @param ContentType $type
     * @param $file
     * @param Context|null $context
     * @return Content
     * @throws f\Exception\MyTargetException
     */
    public function upload(ContentType $type, $file, array $params = null, Context $context = null)
    {

        $context = Context::withLimitBy($context, self::LIMIT_UPLOAD);
        $file = f\streamOrResource($file);

        $body = [];
        $body[] = ["name" => "file", "contents" => $file];
        if($params){
            $body[] = ["name" => 'data', "contents" => Json::encode($params)];
        }
        $path = sprintf("/api/v2/content/%s.json", $type->getValue());
        $json = $this->client->postMultipart($path, $body, null, $context);

        return $this->mapper->hydrateNew(Content::class, $json);
    }


}