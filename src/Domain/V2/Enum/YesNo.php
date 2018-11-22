<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 22.11.18
 * Time: 15:25
 */

namespace Koma136\MyTarget\Domain\V2\Enum;
use Koma136\MyTarget\Domain\AbstractEnum;


class YesNo extends AbstractEnum
{
    const YES = 'yes';

    const NO = 'no';

    /**
     * @return YesNo
     */
    public static function yes()
    {
        return YesNo::fromValue(self::YES);
    }

    /**
     * @return YesNo
     */
    public static function no()
    {
        return YesNo::fromValue(self::NO);
    }

}