<?php

namespace Koma136\MyTarget\Domain\V2\Targeting;

use Koma136\MyTarget\Domain\V2\Enum;
use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Targeting\AgeTargeting;
use Koma136\MyTarget\Domain\V2\Targeting\BirthdayTargeting;


class CampaignTargeting
{
    /**
     * @var AgeTargeting
     * @Field (name="age", type="Koma136\MyTarget\Domain\V2\Targeting\AgeTargeting")
     */
    private $age;
    /**
     * @var int
     * @Field (name="app_recommendation", type="int")
     */
    private $appRecommendation;
    /**
     * @var BirthdayTargeting
     * @Field (name="birthday", type="Koma136\MyTarget\Domain\V2\Targeting\BirthdayTargeting")
     */
    private $birthday;
    /**
     * @var
     * @Field (name="browser", type="")
     */
    private $browser;
    /**
     * @var
     * @Field (name="fulltime", type="")
     */
    private $fulltime;
    /**
     * @var
     * @Field (name="group_members", type="")
     */
    private $group_members;
    /**
     * @var
     * @Field (name="group_recommendation", type="")
     */
    private $group_recommendation;
    /**
     * @var
     * @Field (name="interests", type="")
     */
    private $interests;
    /**
     * @var
     * @Field (name="interests_soc_dem", type="")
     */
    private $interests_soc_dem;
    /**
     * @var
     * @Field (name="interests_stable", type="")
     */
    private $interests_stable;
    /**
     * @var
     * @Field (name="local_geo", type="")
     */
    private $local_geo;
    /**
     * @var
     * @Field (name="mobile_apps", type="")
     */
    private $mobile_apps;
    /**
     * @var
     * @Field (name="mobile_operation_systems", type="")
     */
    private $mobile_operation_systems;
    /**
     * @var
     * @Field (name="mobile_operators", type="")
     */
    private $mobile_operators;
    /**
     * @var
     * @Field (name="mobile_prefix", type="")
     */
    private $mobile_prefix;
    /**
     * @var
     * @Field (name="mobile_types", type="")
     */
    private $mobile_types;
    /**
     * @var
     * @Field (name="mobile_vendors", type="")
     */
    private $mobile_vendors;
    /**
     * @var
     * @Field (name="pad_category", type="")
     */
    private $pad_category;
    /**
     * @var
     * @Field (name="pads", type="")
     */
    private $pads;
    /**
     * @var
     * @Field (name="regions", type="")
     */
    private $regions;
    /**
     * @var
     * @Field (name="segments", type="")
     */
    private $segments;
    /**
     * @var
     * @Field (name="sex", type="")
     */
    private $sex;
}
