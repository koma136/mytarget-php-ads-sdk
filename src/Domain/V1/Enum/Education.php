<?php

namespace Koma136\MyTarget\Domain\V1\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class Education extends AbstractEnum
{
    const YES = "education_yes";
    const NO = "education_no";

    /**
     * @return Education
     */
    public static function yes()
    {
        return self::fromValue(self::YES);
    }

    /**
     * @return Education
     */
    public static function no()
    {
        return self::fromValue(self::NO);
    }
}
