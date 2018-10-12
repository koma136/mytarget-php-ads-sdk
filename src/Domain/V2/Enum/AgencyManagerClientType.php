<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class AgencyManagerClientType extends AbstractEnum
{
    const FULL_ACCESS = 'full_access';
    const READONLY = 'readonly';
    const FIN_READONLY = 'fin_readonly';
    const ADS_READONLY = 'ads_readonly';

    /**
     * @return AgencyManagerClientType
     */
    public static function fullAccess()
    {
        return AgencyManagerClientType::fromValue(self::FULL_ACCESS);
    }

    /**
     * @return AgencyManagerClientType
     */
    public static function readonly()
    {
        return AgencyManagerClientType::fromValue(self::READONLY);
    }

    /**
     * @return AgencyManagerClientType
     */
    public static function finReadonly()
    {
        return AgencyManagerClientType::fromValue(self::FIN_READONLY);
    }

    /**
     * @return AgencyManagerClientType
     */
    public static function adsReadonly()
    {
        return AgencyManagerClientType::fromValue(self::ADS_READONLY);
    }
}