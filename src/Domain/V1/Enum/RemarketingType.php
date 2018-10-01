<?php

namespace Koma136\MyTarget\Domain\V1\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class RemarketingType extends AbstractEnum
{
    const POSITIVE = "positive";
    const NEGATIVE = "negative";

    /**
     * @return RemarketingType
     */
    public static function positive()
    {
        return self::fromValue(self::POSITIVE);
    }

    /**
     * @return RemarketingType
     */
    public static function negative()
    {
        return self::fromValue(self::NEGATIVE);
    }
}
