<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class UserStatus extends AbstractEnum
{
    const ACTIVE = 'active';
    const DELETED = 'deleted';
    const BLOCKED = 'blocked';

    /**
     * @return UserStatus
     */
    public static function active()
    {
        return UserStatus::fromValue(self::ACTIVE);
    }

    /**
     * @return UserStatus
     */
    public static function deleted()
    {
        return UserStatus::fromValue(self::DELETED);
    }

    /**
     * @return UserStatus
     */
    public static function blocked()
    {
        return UserStatus::fromValue(self::BLOCKED);
    }
}