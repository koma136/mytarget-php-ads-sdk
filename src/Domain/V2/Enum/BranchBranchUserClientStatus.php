<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class BranchUserClientStatus extends AbstractEnum
{
    const ACTIVE = 'active';
    const DELETED = 'deleted';
    const BLOCKED = 'blocked';

    /**
     * @return BranchUserClientStatus
     */
    public static function active()
    {
        return BranchUserClientStatus::fromValue(self::ACTIVE);
    }

    /**
     * @return BranchUserClientStatus
     */
    public static function deleted()
    {
        return BranchUserClientStatus::fromValue(self::DELETED);
    }

    /**
     * @return BranchUserClientStatus
     */
    public static function blocked()
    {
        return BranchUserClientStatus::fromValue(self::BLOCKED);
    }
}