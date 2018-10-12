<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class ManagerClientType extends AbstractEnum
{
    const FULL_ACCESS = 'full_access';
    const READONLY = 'readonly';
    const FIN_READONLY = 'fin_readonly';
    const ADS_READONLY = 'ads_readonly';

    /**
     * @return ManagerClientType
     */
    public static function fullAccess()
    {
        return ManagerClientType::fromValue(self::FULL_ACCESS);
    }

    /**
     * @return ManagerClientType
     */
    public static function readonly()
    {
        return ManagerClientType::fromValue(self::READONLY);
    }

    /**
     * @return ManagerClientType
     */
    public static function finReadonly()
    {
        return ManagerClientType::fromValue(self::FIN_READONLY);
    }

    /**
     * @return ManagerClientType
     */
    public static function adsReadonly()
    {
        return ManagerClientType::fromValue(self::ADS_READONLY);
    }
}