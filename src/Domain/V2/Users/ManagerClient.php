<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class ManagerClient extends BaseObject
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
     * @var UserClient
     * @Field(type="Koma136\MyTarget\Domain\V2\Users\UserClient")
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
     * @return \Koma136\MyTarget\Domain\V2\Users\UserClient
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Users\UserClient $user
     */
    public function setUser(UserClient $user)
    {
        $this->user = $user;
    }
}