<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;

class UserClient extends BaseObject
{
    /**
     * @var UserAccount
     * @Field(name="account", type="Koma136\MyTarget\Domain\V2\Users\UserAccount")
     */
    private $account;

    /**
     * @var AdditionalClientInfo
     * @Field(name="additional_info", type="AdditionalClientInfo")
     */
    private $additional_info;

    /**
     * @var int
     * @Field(type="int")
     */
    private $id;

    /**
     * @var string
     * @Field(type="string")
     */
    private $status;

    /**
     * @var string
     * @Field(type="string")
     */
    private $username;

    /**
     * @return UserAccount
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param UserAccount $account
     * @return UserAccount
     */
    public function setUserAccount(UserAccount $account)
    {
        return $this->account = $account;
    }

    /**
     * @return AdditionalClientInfo
     */
    public function getAdditionalInfo()
    {
        return $this->additional_info;
    }

    /**
     * @param AdditionalClientInfo $additionalClientInfo
     * @return AdditionalClientInfo
     */
    public function setAdditionalClientInfo(AdditionalClientInfo $additionalClientInfo)
    {
        return $this->additional_info = $additionalClientInfo;
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
     * @return mixed
     */
    public function setId($id)
    {
        return $this->id = $id;
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
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     * @return mixed
     */
    public function setUsername($username)
    {
        return $this->username = $username;
    }
}