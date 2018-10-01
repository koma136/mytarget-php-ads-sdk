<?php

namespace Koma136\MyTarget\Domain\V1\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class Language extends AbstractEnum
{
    const EN = 'en';
    const RU = 'ru';

    /**
     * @return Language
     */
    public static function en()
    {
        return Language::fromValue(self::EN);
    }

    /**
     * @return Language
     */
    public static function ru()
    {
        return Language::fromValue(self::RU);
    }
}
