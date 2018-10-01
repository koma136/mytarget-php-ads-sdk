<?php

namespace Koma136\MyTarget\Domain\V1\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class Sex extends AbstractEnum
{
    const MALE = 'M';
    const FEMALE = 'F';
    const BOTH = 'FM';
    const ANY = 'FMU';

    /**
     * @return Sex
     */
    public static function male()
    {
        return Sex::fromValue(self::MALE);
    }

    /**
     * @return Sex
     */
    public static function female()
    {
        return Sex::fromValue(self::FEMALE);
    }

    /**
     * @return Sex
     */
    public static function both()
    {
        return Sex::fromValue(self::BOTH);
    }

    public static function any()
    {
        return Sex::fromValue(self::ANY);
    }
}
