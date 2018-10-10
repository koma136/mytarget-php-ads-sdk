<?php

namespace Koma136\MyTarget\Domain\V2;

use Koma136\MyTarget\Mapper\Annotation\Field;

class AgencyClientSettings
{
    /**
     * @var string
     * @Field(name="access_type", type="string")
     */
    private $access_type;
    
    /**
     * @var string
     * @Field(name="status", type="string")
     */
    private $status;
    
    /**
     * @var UserClient
     * @Field(name="UserClient", type="UserClient")
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