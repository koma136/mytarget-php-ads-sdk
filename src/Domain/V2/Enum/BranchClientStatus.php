<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class BranchClientStatus extends AbstractEnum
{
    const ACTIVE = 'active';
    const DELETED = 'deleted';
    const BLOCKED = 'blocked';

    /**
     * @return BranchClientStatus
     */
    public static function active()
    {
        return BranchClientStatus::fromValue(self::ACTIVE);
    }

    /**
     * @return BranchClientStatus
     */
    public static function deleted()
    {
        return BranchClientStatus::fromValue(self::DELETED);
    }

    /**
     * @return BranchClientStatus
     */
    public static function blocked()
    {
        return BranchClientStatus::fromValue(self::BLOCKED);
    }
}