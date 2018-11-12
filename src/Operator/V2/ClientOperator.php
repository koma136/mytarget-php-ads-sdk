<?php

namespace Koma136\MyTarget\Operator\V2;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V2\Users\AdditionalUserInfo;
use Koma136\MyTarget\Domain\V2\Users\AgencyClient;
use Koma136\MyTarget\Mapper\Mapper;

class ClientOperator
{
    const LIMIT_FIND = "client-find";
    const LIMIT_CREATE = "campaign-create";

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
     * @return AgencyClient[]
     */
    public function all(Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);
        $json = $this->client->get("/api/v2/clients.json", null, $context);

        return array_map(function ($json) {
            return $this->mapper->hydrateNew(AgencyClient::class, $json);
        }, $json);
    }


    /**
     * @param AdditionalUserInfo $userInfo
     * @param null $email
     * @param Context|null $context
     * @return AgencyClient
     */
    public function create(AdditionalUserInfo $userInfo, $email=null, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_CREATE);
        $rawUserInfo = $this->mapper->snapshot($userInfo);
        $body = ["user"=>[
                    "additional_info" => $rawUserInfo,
                    "additional_emails" => [$email],
                ]];

        $json = $this->client->post("/api/v2/clients.json", null, $body, $context);
        return $this->mapper->hydrateNew(AgencyClient::class, $json);
    }
}
