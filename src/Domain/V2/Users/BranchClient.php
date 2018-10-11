<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class BranchClient extends BaseObject
{
    /**
     * @var string
     * @Field(name="access_type", type="string")
     */
    private $accessType;

    /**
     * @var string
     * @Field(type="string")
     */
    private $status;

    /**
     * @var BranchUserClient
     * @Field(type="Koma136\MyTarget\Domain\V2\Users\BranchUserClient")
     */
    private $user;

    /**
     * @return string
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * @param $accessType
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return BranchUserClient
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param BranchUserClient $user
     */
    public function setUser(BranchUserClient $user)
    {
        $this->user = $user;
    }
}