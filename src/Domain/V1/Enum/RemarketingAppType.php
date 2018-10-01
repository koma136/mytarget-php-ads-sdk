<?php

namespace Koma136\MyTarget\Domain\V1\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class RemarketingAppType extends AbstractEnum
{
    const ODKL = "odkl_app";
    const MIR = "mir_app";

    /**
     * @return RemarketingAppType
     */
    public static function odkl()
    {
        return self::fromValue(self::ODKL);
    }

    /**
     * @return RemarketingAppType
     */
    public static function mir()
    {
        return self::fromValue(self::MIR);
    }
}
