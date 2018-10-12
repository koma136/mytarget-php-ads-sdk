<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class UserManagerClientStatus extends AbstractEnum
{
    const ACTIVE = 'active';
    const DELETED = 'deleted';
    const BLOCKED = 'blocked';

    /**
     * @return UserManagerClientStatus
     */
    public static function active()
    {
        return UserManagerClientStatus::fromValue(self::ACTIVE);
    }

    /**
     * @return UserManagerClientStatus
     */
    public static function deleted()
    {
        return UserManagerClientStatus::fromValue(self::DELETED);
    }

    /**
     * @return UserManagerClientStatus
     */
    public static function blocked()
    {
        return UserManagerClientStatus::fromValue(self::BLOCKED);
    }
}