<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class ReservedAmount extends BaseObject
{
    /**
     * @var int
     * @Field(type="int")
     */
    private $balance;

    /**
     * @var int
     * @Field(type="int")
     */
    private $credit;

    /**
     * @var int
     * @Field(name="g_balance", type="int")
     */
    private $gBalance;

    /**
     * @var int
     * @Field(type="int")
     */
    private $hold;

    /**
     * @var int
     * @Field(name="hold_overdraft_limit", type="int")
     */
    private $holdOverdraftLimit;

    /**
     * @var int
     * @Field(name="user_id", type="int")
     */
    private $userId;

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return string
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @return int
     */
    public function getGBalance()
    {
        return $this->gBalance;
    }

    /**
     * @param $gBalance
     */
    public function setGBalance($gBalance)
    {
        $this->gBalance = $gBalance;
    }

    /**
     * @param $credit
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;
    }

    /**
     * @return string
     */
    public function getHold()
    {
        return $this->hold;
    }

    /**
     * @param string $hold
     */
    public function setHold($hold)
    {
        $this->hold = $hold;
    }

    /**
     * @return int
     */
    public function getHoldOverdraftLimit()
    {
        return $this->holdOverdraftLimit;
    }

    /**
     * @param $holdOverdraftLimit
     */
    public function setHoldOverdraftLimit($holdOverdraftLimit)
    {
        $this->holdOverdraftLimit = $holdOverdraftLimit;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}