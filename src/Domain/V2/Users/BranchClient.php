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
     * @return mixed
     */
    public function setAccessType($accessType)
    {
        return $this->accessType = $accessType;
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
     * @return mixed
     */
    public function setStatus($status)
    {
        return $this->status = $status;
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
     * @return BranchUserClient
     */
    public function setUser(BranchUserClient $user)
    {
        return $this->user = $user;
    }
}