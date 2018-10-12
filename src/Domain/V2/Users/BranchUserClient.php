<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;

class BranchUserClient extends BaseObject
{
    /**
     * @var BranchUserAccount
     * @Field(type="Koma136\MyTarget\Domain\V2\Users\BranchUserAccount")
     */
    private $account;

    /**
     * @var AdditionalBranchClientInfo
     * @Field(name="additional_info", type="Koma136\MyTarget\Domain\V2\Users\AdditionalBranchClientInfo")
     */
    private $additionalInfo;

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
     * @return BranchUserAccount
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param BranchUserAccount $account
     */
    public function setAccount(BranchUserAccount $account)
    {
        $this->account = $account;
    }

    /**
     * @return AdditionalBranchClientInfo
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * @param AdditionalBranchClientInfo $additionalInfo
     */
    public function setAdditionalInfo(AdditionalBranchClientInfo $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
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