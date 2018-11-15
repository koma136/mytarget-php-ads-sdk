<?php

namespace Koma136\MyTarget\Operator\V2\Fields;

use Koma136\MyTarget\Operator\AbstractFields;

/**
 * Class CampaignFields
 * @package Koma136\MyTarget\Operator\V2\Fields
 */
class CampaignFields extends AbstractFields
{
    const FIELD_BANNERS = 'banners';

    public function defaultFields()
    {
        return [
            'age_restrictions',
            'audit_pixels',
            'autobidding_mode',
            'banner_uniq_shows_limit',
            'budget_limit',
            'budget_limit_day',
            'cr_max_price',
            'created',
            'date_end',
            'date_start',
            'delivery',
            'enable_utm',
            'id',
            'issues',
            'mixing',
            'name',
            'package_id',
            'price',
            'pricelist_id',
            'shows_limit',
            'status',
            'targetings',
            'uniq_shows_limit',
            'uniq_shows_period',
            'updated',
            'utm'
        ];
    }
}
