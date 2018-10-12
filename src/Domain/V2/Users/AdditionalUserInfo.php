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
     * @Field(name="client_info", type="string")
     */
    private $clientInfo;

    /**
     * @var string
     * @Field(name="client_name", type="string")
     */
    private $clientName;

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
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getClientInfo()
    {
        return $this->clientInfo;
    }

    /**
     * @param $clientInfo
     */
    public function setClientInfo($clientInfo)
    {
        $this->clientInfo = $clientInfo;
    }

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->clientName;
    }

    /**
     * @param $clientName
     */
    public function setClientName($clientName)
    {
        $this->clientName = $clientName;
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}