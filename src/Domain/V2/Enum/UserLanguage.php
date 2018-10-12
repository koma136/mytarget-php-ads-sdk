<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class UserLanguage extends AbstractEnum
{
    const RU = 'ru';
    const EN = 'en';

    /**
     * @return UserLanguage
     */
    public static function ru()
    {
        return UserLanguage::fromValue(self::RU);
    }

    /**
     * @return UserLanguage
     */
    public static function en()
    {
        return UserLanguage::fromValue(self::EN);
    }
}