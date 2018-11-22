<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 22.11.18
 * Time: 15:29
 */

namespace Koma136\MyTarget\Domain\V2\Enum;
use Koma136\MyTarget\Domain\AbstractEnum;

/**
 * Class YesNoInt
 * @package Koma136\MyTarget\Domain\V2\Enum
 */
class YesNoInt extends AbstractEnum
{
    const YES = 1;

    const NO = 0;

    /**
     * @return YesNoInt
     */
    public static function yes()
    {
        return YesNoInt::fromValue(self::YES);
    }

    /**
     * @return YesNoInt
     */
    public static function no()
    {
        return YesNoInt::fromValue(self::NO);
    }
}