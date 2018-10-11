<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;

use Yii\base\BaseObject;
use Koma136\MyTarget\Domain\V2\Users\UserClient;

class AgencyClientSettings extends BaseObject
{
    /**
     * @var string
     * @Field(type="string")
     */
    private $access_type;
    
    /**
     * @var string
     * @Field(type="string")
     */
    private $status;
    
    /**
     * @var UserClient
     * @Field(name="UserClient", type="Koma136\MyTarget\Domain\V2\Users\UserClient")
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
     * @return mixed
     */
    public function setAccessType($accessType)
    {
        return $this->access_type = $accessType;
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
     * @return UserClient
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * @param UserClient $user
     * @return UserClient
     */
    public function setUser(UserClient $user)
    {
        return $this->user = $user;
    }
}