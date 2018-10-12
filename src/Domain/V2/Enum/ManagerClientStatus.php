<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class ManagerClientStatus extends AbstractEnum
{
    const ACTIVE = 'active';
    const DELETED = 'deleted';
    const BLOCKED = 'blocked';

    /**
     * @return ManagerClientStatus
     */
    public static function active()
    {
        return ManagerClientStatus::fromValue(self::ACTIVE);
    }

    /**
     * @return ManagerClientStatus
     */
    public static function deleted()
    {
        return ManagerClientStatus::fromValue(self::DELETED);
    }

    /**
     * @return ManagerClientStatus
     */
    public static function blocked()
    {
        return ManagerClientStatus::fromValue(self::BLOCKED);
    }
}