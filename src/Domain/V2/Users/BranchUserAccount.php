<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class BranchUserAccount extends BaseObject
{
    /**
     * @var int
     * @Field(name="a_balance", type="int")
     */
    private $aBalance;

    /**
     * @var int
     * @Field(type="int")
     */
    private $balance;

    /**
     * @var int
     * @Field(name="currency_balance_hold", type="int")
     */
    private $currencyBalanceHold;

    /**
     * @var string
     * @Field(type="string")
     */
    private $type;

    /**
     * @return int
     */
    public function getABalance()
    {
        return $this->aBalance;
    }

    /**
     * @param $aBalance
     * @return mixed
     */
    public function setABalance($aBalance)
    {
        return $this->aBalance = $aBalance;
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
        return $this->currencyBalanceHold;
    }

    /**
     * @param $currencyBalanceHold
     * @return mixed
     */
    public function setCurrencyBalanceHold($currencyBalanceHold)
    {
        return $this->currencyBalanceHold = $currencyBalanceHold;
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