<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class AdditionalClientInfo extends BaseObject
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
    private $email;

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
    public function set($address)
    {
        $this->address = $address;
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
     */
    public function setClientInfo($clientInfo)
    {
        $this->client_info = $clientInfo;
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
     */
    public function setClientName($clientName)
    {
        $this->client_name = $clientName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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