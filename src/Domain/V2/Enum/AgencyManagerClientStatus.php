<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class AgencyManagerClientStatus extends AbstractEnum
{
    const ACTIVE = 'active';
    const DELETED = 'deleted';
    const BLOCKED = 'blocked';

    /**
     * @return AgencyManagerClientStatus
     */
    public static function active()
    {
        return AgencyManagerClientStatus::fromValue(self::ACTIVE);
    }

    /**
     * @return AgencyManagerClientStatus
     */
    public static function deleted()
    {
        return AgencyManagerClientStatus::fromValue(self::DELETED);
    }

    /**
     * @return AgencyManagerClientStatus
     */
    public static function blocked()
    {
        return AgencyManagerClientStatus::fromValue(self::BLOCKED);
    }
}