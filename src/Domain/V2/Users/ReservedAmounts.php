<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class ReservedAmounts extends BaseObject
{
    /**
     * @var ReservedAmount
     * @Field(name="reserved_amounts", type="Koma136\MyTarget\Domain\V2\Users\ReservedAmount")
     */
    private $reservedAmounts;

    /**
     * @return ReservedAmount
     */
    public function getReservedAmounts()
    {
        return $this->reservedAmounts;
    }

    /**
     * @param ReservedAmount $reservedAmounts
     * @return ReservedAmount
     */
    public function setReservedAmounts(ReservedAmount $reservedAmounts)
    {
        return $this->reservedAmounts = $reservedAmounts;
    }
}