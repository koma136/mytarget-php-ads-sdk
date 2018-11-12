<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;

use Yii\base\BaseObject;
use Koma136\MyTarget\Domain\V2\Users\UserClient;

class AgencyClient extends BaseObject
{
    /**
     * @var string
     * @Field(type="string")
     */
    private $access_type;

    /**
     * @var UserStatus
     * @Field(type="Koma136\MyTarget\Domain\V2\Enum\UserStatus")
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
        return $this->access_type;
    }

    /**
     * @param $accessType
     */
    public function setAccessType($accessType)
    {
        $this->access_type = $accessType;
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
     * @return UserClient
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserClient $user
     */
    public function setUser(UserClient $user)
    {
        $this->user = $user;
    }
}