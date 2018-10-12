<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class AgencyClientStatus extends AbstractEnum
{
    const ACTIVE = 'active';
    const DELETED = 'deleted';
    const BLOCKED = 'blocked';
    
    /**
     * @return AgencyClientStatus
     */
    public static function active()
    {
        return AgencyClientStatus::fromValue(self::ACTIVE);
    }
    
    /**
     * @return AgencyClientStatus
     */
    public static function deleted()
    {
        return AgencyClientStatus::fromValue(self::DELETED);
    }
    
    /**
     * @return AgencyClientStatus
     */
    public static function blocked()
    {
        return AgencyClientStatus::fromValue(self::BLOCKED);
    }
}