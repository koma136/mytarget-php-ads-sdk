<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class AdditionalUserInfo extends BaseObject
{
    /**
     * @var string
     * @Field(type="string")
     */
    private $address;

    /**
     * @var string
     * @Field(type="string")
     */
    private $client_info;

    /**
     * @var string
     * @Field(type="string")
     */
    private $client_name;

    /**
     * @var string
     * @Field(type="string")
     */
    private $name;

    /**
     * @var string
     * @Field(type="string")
     */
    private $phone;

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address
     * @return mixed
     */
    public function set($address)
    {
        return $this->address = $address;
    }

    /**
     * @return string
     */
    public function getClientInfo()
    {
        return $this->client_info;
    }

    /**
     * @param $clientInfo
     * @return mixed
     */
    public function setClientInfo($clientInfo)
    {
        return $this->client_info = $clientInfo;
    }

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->client_name;
    }

    /**
     * @param $clientName
     * @return mixed
     */
    public function setClientName($clientName)
    {
        return $this->client_name = $clientName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function setName($name)
    {
        return $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $phone
     * @return mixed
     */
    public function setPhone($phone)
    {
        return $this->phone = $phone;
    }
}