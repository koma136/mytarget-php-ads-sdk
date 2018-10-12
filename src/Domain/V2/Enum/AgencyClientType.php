<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class AgencyClientType extends AbstractEnum
{
    const FULL_ACCESS = 'full_access';
    const READONLY = 'readonly';
    const FIN_READONLY = 'fin_readonly';
    const ADS_READONLY = 'ads_readonly';
    
    /**
     * @return AgencyClientType
     */
    public static function fullAccess()
    {
        return AgencyClientType::fromValue(self::FULL_ACCESS);
    }
    
    /**
     * @return AgencyClientType
     */
    public static function readonly()
    {
        return AgencyClientType::fromValue(self::READONLY);
    }
    
    /**
     * @return AgencyClientType
     */
    public static function finReadonly()
    {
        return AgencyClientType::fromValue(self::FIN_READONLY);
    }
    
    /**
     * @return AgencyClientType
     */
    public static function adsReadonly()
    {
        return AgencyClientType::fromValue(self::ADS_READONLY);
    }
}