<?php

namespace Koma136\MyTarget\Operator\V1\Remarketing;

use Koma136\MyTarget\Client;
use Koma136\MyTarget\Context;
use Koma136\MyTarget\Domain\V1\Remarketing\RemarketingUserList;
use Koma136\MyTarget\Domain\V1\Remarketing\UploadUserList;
use Koma136\MyTarget\Mapper\Mapper;
use Psr\Http\Message\StreamInterface;

class RemarketingUserListsOperator
{
    const LIMIT_CREATE = "remarketing-user-list-upload";
    const LIMIT_FIND = "remarketing-user-list-find";
    const LIMIT_DELETE = "remarketing-user-list-delete";

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
     * @param resource|string|StreamInterface $file
     * @param UploadUserList $upload
     * @param Context|null $context
     * @return RemarketingUserList
     */
    public function create($file, UploadUserList $upload, Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_CREATE);
        $file = \Koma136\MyTarget\streamOrResource($file);

        $body = [
            ["name" => "name", "contents" => $upload->getName()],
            ["name" => "type", "contents" => $upload->getType()],
            ["name" => "base", "contents" => $upload->getBase()],
            ["name" => "file", "contents" => $file, "filename" => $upload->getName()]
        ];

        $json = $this->client->postMultipart("/api/v1/remarketing_users_lists.json", $body, null, $context);

        return $this->mapper->hydrateNew(RemarketingUserList::class, $json);
    }

    /**
     * @param Context|null $context
     *
     * @return RemarketingUserList[]
     */
    public function all(Context $context = null)
    {
        $context = Context::withLimitBy($context, self::LIMIT_FIND);
        $json = $this->client->get("/api/v1/remarketing_users_lists.json", null, $context);

        return array_map(function ($json) {
            return $this->mapper->hydrateNew(RemarketingUserList::class, $json);
        }, $json);
    }

    /**
     * @param int $id
     * @param Context|null $context
     */
    public function delete($id, Context $context = null)
    {
        $path = sprintf("/api/v1/remarketing_users_list/%d.json", $id);
        $this->client->delete($path, null, Context::withLimitBy($context, self::LIMIT_DELETE));
    }
}
