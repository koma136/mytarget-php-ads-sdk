<?php

namespace Koma136\MyTarget\Domain\V2\Users;


use yii\base\BaseObject;

class UserAccount extends BaseObject
{
    /**
     * @var int
     * @Field(name="a_balance", type="int")
     */
    private $a_balance;

    /**
     * @var int
     * @Field(name="balance", type="int")
     */
    private $balance;

    /**
     * @var int
     * @Field(name="currency_balance_hold", type="int")
     */
    private $currency_balance_hold;

    /**
     * @var int
     * @Field(type="int")
     */
    private $id;

    /**
     * @var string
     * @Field(name="type", type="string")
     */
    private $type;

    /**
     * @return int
     */
    public function getABalance()
    {
        return $this->a_balance;
    }

    /**
     * @param $aBalance
     * @return mixed
     */
    public function setABalance($aBalance)
    {
        return $this->a_balance = $aBalance;
    }

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param $balance
     * @return mixed
     */
    public function setBalance($balance)
    {
        return $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getCurrencyBalanceHold()
    {
        return $this->currency_balance_hold;
    }

    /**
     * @param $currencyBalanceHold
     * @return mixed
     */
    public function setCurrencyBalanceHold($currencyBalanceHold)
    {
        return $this->currency_balance_hold = $currencyBalanceHold;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     * @return mixed
     */
    public function setType($type)
    {
        return $this->type = $type;
    }
}