<?php

namespace Koma136\MyTarget\Domain\V2\Campaign;

use Koma136\MyTarget\Domain\V2\Banner\BannerCampaign;
use Koma136\MyTarget\Domain\V2\Enum\AutobiddingMode;
use Koma136\MyTarget\Domain\V2\Enum\Mixing;
use Koma136\MyTarget\Domain\V2\Enum\Status;
use Koma136\MyTarget\Domain\V2\Targeting\CampaignTargeting;
use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget as f;

/**
 * Class MutateCampaign
 * @package Koma136\MyTarget\Domain\V2\Campaign
 */
class MutateCampaign
{
    /**
     * @var string
     * @Field(name="age_restrictions", type="string")
     */
    private $ageRestrictions;

    /**
     * @var string[]
     * @Field(name="audit_pixels", type="dict<string>")
     */
    private $auditPixels;
    /**
     * @var AutobiddingMode
     * @Field(name="autobidding_mode", type="Koma136\MyTarget\Domain\V2\Enum\AutobiddingMode")
     */
    private $autobiddingMode;

    /**
     * @var int
     * @Field(name="banner_uniq_shows_limit", type="int")
     */
    private $bannerUniqShowsLimit;

    /**
     * @var string
     * @Field(name="budget_limit_day", type="string")
     */
    private $budgetLimitDay;

    /**
     * @var string
     * @Field(name="budget_limit", type="string")
     */
    private $budgetLimit;

    /**
     * @var string
     * @Field(name="cr_max_price", type="string")
     */
    private $crMaxPrice;

    /**
     * @var \DateTimeImmutable
     * @Field(name="date_start", type="DateTime<d.m.Y>")
     */
    private $dateStart;

    /**
     * @var \DateTimeImmutable
     * @Field(name="date_end", type="DateTime<d.m.Y>")
     */
    private $dateEnd;
    /**
     * @var bool
     * @Field(name="enable_utm", type="bool")
     */
    private $enableUtm;

    /**
     * @var Mixing
     * @Field(name="mixing", type="Koma136\MyTarget\Domain\V1\Enum\Mixing")
     */
    private $mixing;

    /**
     * @var string
     * @Field(type="string")
     */
    private $name;
    /**
     * @var int
     * @Field(name="package_id", type="int")
     */
    private $packageId;
    /**
     * @var float
     * @Field(type="float")
     */
    private $price;
    /**
     * @var int
     * @Field(name="pricelist_id", type="int")
     */
    private $pricelistId;
    /**
     * @var int
     * @Field(name="shows_limit", type="int")
     */
    private $showsLimit;

    /**
     * @var Status
     * @Field(type="Koma136\MyTarget\Domain\V1\Enum\Status")
     */
    private $status;

    /**
     * @var CampaignTargeting
     * @Field(name="targetings", type="Koma136\MyTarget\Domain\V2\Targeting\CampaignTargeting")
     */
    private $targetings;

    /**
     * @var int
     * @Field(name="uniq_shows_limit", type="int")
     */
    private $uniqShowsLimit;

    /**
     * @var string
     * @Field(name="uniq_shows_period", type="string")
     */
    private $uniqShowsPeriod;

    /**
     * @var string
     * @Field(name="utm", type="string")
     */
    private $utm;

    /**
     * @var BannerCampaign[]
     * @Field (name="banners", type="array<Koma136\MyTarget\Domain\V2\Banner\BannerCampaign>")
     */
    private $banners;


    /**
     * @return MutateCampaign
     */
    public static function create(){
        return new self();
    }

    /**
     * @return string
     */
    public function getUniqShowsPeriod(): string
    {
        return $this->uniqShowsPeriod;
    }

    /**
     * @return bool
     */
    public function isEnableUtm(): bool
    {
        return $this->enableUtm;
    }

    /**
     * @return int
     */
    public function getUniqShowsLimit(): int
    {
        return $this->uniqShowsLimit;
    }

    /**
     * @return string
     */
    public function getUtm(): string
    {
        return $this->utm;
    }

    /**
     * @return CampaignTargeting
     */
    public function getTargetings(): CampaignTargeting
    {
        return $this->targetings;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Mixing
     */
    public function getMixing(): Mixing
    {
        return $this->mixing;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDateStart(): \DateTimeImmutable
    {
        return $this->dateStart;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDateEnd(): \DateTimeImmutable
    {
        return $this->dateEnd;
    }

    /**
     * @return string
     */
    public function getBudgetLimitDay(): string
    {
        return $this->budgetLimitDay;
    }

    /**
     * @return string
     */
    public function getBudgetLimit(): string
    {
        return $this->budgetLimit;
    }

    /**
     * @return int
     */
    public function getBannerUniqShowsLimit(): int
    {
        return $this->bannerUniqShowsLimit;
    }

    /**
     * @return string[]
     */
    public function getAuditPixels(): array
    {
        return $this->auditPixels;
    }

    /**
     * @return string
     */
    public function getAgeRestrictions(): string
    {
        return $this->ageRestrictions;
    }

    /**
     * @return AutobiddingMode
     */
    public function getAutobiddingMode(): AutobiddingMode
    {
        return $this->autobiddingMode;
    }

    /**
     * @return string
     */
    public function getCrMaxPrice(): string
    {
        return $this->crMaxPrice;
    }

    /**
     * @return int
     */
    public function getPackageId(): int
    {
        return $this->packageId;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getPricelistId(): int
    {
        return $this->pricelistId;
    }

    /**
     * @return int
     */
    public function getShowsLimit(): int
    {
        return $this->showsLimit;
    }

    /**
     * @param string $uniqShowsPeriod
     * @return $this
     */
    public function setUniqShowsPeriod(string $uniqShowsPeriod)
    {
        $this->uniqShowsPeriod = $uniqShowsPeriod;
        return $this;
    }

    /**
     * @param bool $enableUtm
     * @return $this
     */
    public function setEnableUtm(bool $enableUtm)
    {
        $this->enableUtm = $enableUtm;
        return $this;
    }

    /**
     * @param int $uniqShowsLimit
     * @return $this
     */
    public function setUniqShowsLimit(int $uniqShowsLimit)
    {
        $this->uniqShowsLimit = $uniqShowsLimit;
        return $this;
    }

    /**
     * @param string $utm
     * @return $this
     */
    public function setUtm(string $utm)
    {
        $this->utm = $utm;
        return $this;
    }

    /**
     * @param CampaignTargeting $targetings
     * @return $this
     */
    public function setTargetings(CampaignTargeting $targetings)
    {
        $this->targetings = $targetings;
        return $this;
    }

    /**
     * @param Status $status
     * @return $this
     */
    public function setStatus(Status $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param Mixing $mixing
     * @return $this
     */
    public function setMixing(Mixing $mixing)
    {
        $this->mixing = $mixing;
        return $this;
    }

    /**
     * @param \DateTimeImmutable $dateStart
     * @return $this
     */
    public function setDateStart(\DateTimeImmutable $dateStart)
    {
        $this->dateStart = $dateStart;
        return $this;
    }

    /**
     * @param \DateTimeImmutable $dateEnd
     * @return $this
     */
    public function setDateEnd(\DateTimeImmutable $dateEnd)
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }

    /**
     * @param string $budgetLimitDay
     * @return $this
     */
    public function setBudgetLimitDay(string $budgetLimitDay)
    {
        $this->budgetLimitDay = $budgetLimitDay;
        return $this;
    }

    /**
     * @param string $budgetLimit
     * @return $this
     */
    public function setBudgetLimit(string $budgetLimit)
    {
        $this->budgetLimit = $budgetLimit;
        return $this;
    }

    /**
     * @param int $bannerUniqShowsLimit
     * @return $this
     */
    public function setBannerUniqShowsLimit(int $bannerUniqShowsLimit)
    {
        $this->bannerUniqShowsLimit = $bannerUniqShowsLimit;
        return $this;
    }

    /**
     * @param string[] $auditPixels
     * @return $this
     */
    public function setAuditPixels(array $auditPixels)
    {
        $this->auditPixels = $auditPixels;
        return $this;
    }

    /**
     * @param string $ageRestrictions
     * @return $this
     */
    public function setAgeRestrictions(string $ageRestrictions)
    {
        $this->ageRestrictions = $ageRestrictions;
        return $this;
    }

    /**
     * @param AutobiddingMode $autobiddingMode
     * @return $this
     */
    public function setAutobiddingMode(AutobiddingMode $autobiddingMode)
    {
        $this->autobiddingMode = $autobiddingMode;
        return $this;
    }

    /**
     * @param string $crMaxPrice
     * @return $this
     */
    public function setCrMaxPrice(string $crMaxPrice)
    {
        $this->crMaxPrice = $crMaxPrice;
        return $this;
    }

    /**
     * @param int $packageId
     * @return $this
     */
    public function setPackageId(int $packageId)
    {
        $this->packageId = $packageId;
        return $this;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param int $pricelistId
     * @return $this
     */
    public function setPricelistId(int $pricelistId)
    {
        $this->pricelistId = $pricelistId;
        return $this;
    }

    /**
     * @param int $showsLimit
     * @return $this
     */
    public function setShowsLimit(int $showsLimit)
    {
        $this->showsLimit = $showsLimit;
        return $this;
    }

    /**
     * @return BannerCampaign[]
     */
    public function getBanners(): array
    {
        return $this->banners;
    }

    /**
     * @param BannerCampaign[] $banners
     * @return $this
     */
    public function setBanners(array $banners)
    {
        $this->banners = $banners;
        return $this;
    }

}
