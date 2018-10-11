<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class BranchUserAccountType extends AbstractEnum
{
    const JURIDICAL = 'juridical';
    const PHYSICAL = 'physical';

    /**
     * @return BranchUserAccountType
     */
    public static function fullAccess()
    {
        return BranchUserAccountType::fromValue(self::JURIDICAL);
    }

    /**
     * @return BranchUserAccountType
     */
    public static function readonly()
    {
        return BranchUserAccountType::fromValue(self::PHYSICAL);
    }
}