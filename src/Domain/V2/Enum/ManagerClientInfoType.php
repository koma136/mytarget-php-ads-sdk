<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class ManagerClientInfoType extends AbstractEnum
{
    const FULL_ACCESS = 'full_access';
    const READONLY = 'readonly';
    const FIN_READONLY = 'fin_readonly';
    const ADS_READONLY = 'ads_readonly';

    /**
     * @return ManagerClientInfoType
     */
    public static function fullAccess()
    {
        return ManagerClientInfoType::fromValue(self::FULL_ACCESS);
    }

    /**
     * @return ManagerClientInfoType
     */
    public static function readonly()
    {
        return ManagerClientInfoType::fromValue(self::READONLY);
    }

    /**
     * @return ManagerClientInfoType
     */
    public static function finReadonly()
    {
        return ManagerClientInfoType::fromValue(self::FIN_READONLY);
    }

    /**
     * @return ManagerClientInfoType
     */
    public static function adsReadonly()
    {
        return ManagerClientInfoType::fromValue(self::ADS_READONLY);
    }
}