<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class Mixing extends AbstractEnum
{
    const FASTEST = 'fastest';
    const RECOMMENDED = 'recommended';
    const NONE = 'None';

    /**
     * @return Mixing
     */
    public static function fastest()
    {
        return Mixing::fromValue(self::FASTEST);
    }

    /**
     * @return Mixing
     */
    public static function recommended()
    {
        return Mixing::fromValue(self::RECOMMENDED);
    }

    /**
     * @return Mixing
     */
    public static function none()
    {
        return Mixing::fromValue(self::NONE);
    }
}
