<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class BranchClientType extends AbstractEnum
{
    const FULL_ACCESS = 'full_access';

    /**
     * @return BranchClientType
     */
    public static function fullAccess()
    {
        return BranchClientType::fromValue(self::FULL_ACCESS);
    }
}