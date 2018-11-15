<?php
namespace Koma136\MyTarget\Domain\V2\Enum;

use Koma136\MyTarget\Domain\AbstractEnum;

class CampaignDelivery extends AbstractEnum
{
    const PENDING = 'pending';
    const DELIVERING = 'delivering';
    const NOT_DELIVERING = 'not_delivering';

    /**
     * @return static
     */
    public static function pending()
    {
        return CampaignDelivery::fromValue(self::PENDING);
    }
    /**
     * @return static
     */
    public static function delivering()
    {
        return CampaignDelivery::fromValue(self::DELIVERING);
    }
    /**
     * @return static
     */
    public static function notDelivering()
    {
        return CampaignDelivery::fromValue(self::NOT_DELIVERING);
    }

}