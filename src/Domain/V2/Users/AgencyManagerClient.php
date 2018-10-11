<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;
use Koma136\MyTarget\Domain\V2\Users\UserManagerClient;


class AgencyManagerClient extends BaseObject
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
     * @var UserManagerClient
     * @Field(type="Koma136\MyTarget\Domain\V2\Users\UserManagerClient")
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
     * @return \Koma136\MyTarget\Domain\V2\Users\UserManagerClient
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Users\UserManagerClient $user
     * @return \Koma136\MyTarget\Domain\V2\Users\UserManagerClient
     */
    public function setUser(UserManagerClient $user)
    {
        return $this->user = $user;
    }
}