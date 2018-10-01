<?php

namespace Koma136\MyTarget\Domain\V1\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class MobileType extends AbstractEnum
{
    const TABLETS = 'tablets';
    const SMARTPHONES = 'smartphones';

    /**
     * @return MobileType
     */
    public static function tablets()
    {
        return MobileType::fromValue(self::TABLETS);
    }

    /**
     * @return MobileType
     */
    public static function smartphones()
    {
        return MobileType::fromValue(self::SMARTPHONES);
    }
}
