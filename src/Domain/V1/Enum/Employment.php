<?php

namespace Koma136\MyTarget\Domain\V1\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class Employment extends AbstractEnum
{
    const YES = "employment_yes";
    const NO = "employment_no";

    /**
     * @return Employment
     */
    public static function yes()
    {
        return Employment::fromValue(self::YES);
    }

    /**
     * @return Employment
     */
    public static function no()
    {
        return Employment::fromValue(self::NO);
    }
}
