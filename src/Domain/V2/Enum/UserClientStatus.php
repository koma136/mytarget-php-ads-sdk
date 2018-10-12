<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class UserClientStatus extends AbstractEnum
{
    const ACTIVE = 'active';
    const DELETED = 'deleted';
    const BLOCKED = 'blocked';

    /**
     * @return UserClientStatus
     */
    public static function active()
    {
        return UserClientStatus::fromValue(self::ACTIVE);
    }

    /**
     * @return UserClientStatus
     */
    public static function deleted()
    {
        return UserClientStatus::fromValue(self::DELETED);
    }

    /**
     * @return UserClientStatus
     */
    public static function blocked()
    {
        return UserClientStatus::fromValue(self::BLOCKED);
    }
}