<?php

namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class ModerationStatus extends AbstractEnum
{
    const PENDING = 'pending';
    const ALLOWED = 'allowed';
    const BANNED = 'banned';


    /**
     * @return ModerationStatus
     */
    public static function allowed()
    {
        return ModerationStatus::fromValue(self::ALLOWED);
    }

    /**
     * @return ModerationStatus
     */
    public static function banned()
    {
        return ModerationStatus::fromValue(self::BANNED);
    }
    /**
     * @return ModerationStatus
     */
    public static function pending()
    {
        return ModerationStatus::fromValue(self::PENDING);
    }


}
