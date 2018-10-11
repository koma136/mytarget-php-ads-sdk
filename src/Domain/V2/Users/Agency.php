<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class Agency extends BaseObject
{
    /**
     * @var int
     * @Field(name="buyer_commission", type="int")
     */
    private $buyerCommission;

    /**
     * @var bool
     * @Field(name="is_buyer", type="bool")
     */
    private $isBuyer;

    /**
     * @var int
     * @Field(name="overriding_commission", type="int")
     */
    private $overridingCommission;

    /**
     * @return int
     */
    public function getBuyerCommission()
    {
        return $this->buyerCommission;
    }

    /**
     * @param $buyerCommission
     * @return mixed
     */
    public function setBuyerCommission($buyerCommission)
    {
        return $this->buyerCommission = $buyerCommission;
    }

    /**
     * @return bool
     */
    public function isBuyer()
    {
        return $this->isBuyer;
    }

    /**
     * @param $isBuyer
     */
    public function setIsBuyer($isBuyer)
    {
        $this->isBuyer = $isBuyer;
    }

    /**
     * @return int
     */
    public function getOverridingCommission()
    {
        return $this->overridingCommission;
    }

    /**
     * @param $overridingCommission
     * @return mixed
     */
    public function setOverridingCommission($overridingCommission)
    {
        return $this->overridingCommission = $overridingCommission;
    }
}