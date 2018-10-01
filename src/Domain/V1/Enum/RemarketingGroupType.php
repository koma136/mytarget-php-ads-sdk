<?php

namespace Koma136\MyTarget\Domain\V1\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class RemarketingGroupType extends AbstractEnum
{
    const GROUP = "group";
    const SCOPE = "scope";

    /**
     * @return RemarketingGroupType
     */
    public static function group()
    {
        return self::fromValue(self::GROUP);
    }

    /**
     * @return RemarketingGroupType
     */
    public static function scope()
    {
        return self::fromValue(self::SCOPE);
    }
}
