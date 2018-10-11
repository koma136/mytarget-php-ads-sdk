<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class UserManager extends BaseObject
{
    /**
     * @var AdditionalManagerInfo
     * @Field(name="additional_info", type="Koma136\MyTarget\Domain\V2\Users\AdditionalManagerInfo")
     */
    private $additionalInfo;

    /**
     * @var int[]
     * @Field(type="array<ManagerClientInfo>")
     */
    private $clients;

    /**
     * @var int
     * @Field(type="int")
     */
    private $id;

    /**
     * @var string
     * @Field(type="string")
     */
    private $username;

    /**
     * @return AdditionalManagerInfo
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param $additionalInfo
     */
    public function setAdditionalInfo($additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return int[]
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @param $clients
     */
    public function setClients($clients)
    {
        $this->clients = $clients;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
}