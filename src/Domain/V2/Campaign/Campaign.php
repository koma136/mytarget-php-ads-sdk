<?php

namespace Koma136\MyTarget\Domain\V2\Campaign;

use Koma136\MyTarget\Domain\V2\Targeting\CampaignTargeting;
use Koma136\MyTarget\Domain\V2\Enum\Mixing;
use Koma136\MyTarget\Domain\V2\Enum\Status;
use Koma136\MyTarget\Domain\V2\Enum\AutobiddingMode;
use Koma136\MyTarget\Domain\V2\Enum\CampaignDelivery;
use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget as f;
use yii\base\BaseObject;

class Campaign
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
     * @Field(type="DateTime")
     */
    private $created;

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
     * @var CampaignDelivery
     * @Field(name="delivery", type="Koma136\MyTarget\Domain\V2\Enum\CampaignDelivery")
     */
    private $delivery;
    /**
     * @var bool
     * @Field(name="enable_utm", type="bool")
     */
    private $enableUtm;
    /**
     * @var int
     * @Field(type="int")
     */
    private $id;
    /**
     * @var BaseObject[]
     * @Field(name="issues", type="dict<yii\base\BaseObject>")
     */
    private $issues;

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
     * @Field(name="targetings", type="Koma136\MyTarget\Domain\V1\Targeting\CampaignTargeting")
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
     * @var \DateTimeImmutable
     * @Field(type="DateTime")
     */
    private $updated;
    /**
     * @var string
     * @Field(name="utm", type="string")
     */
    private $utm;

    /**
     * @param string $name
     * @param CampaignTargeting $targetings
     */
    public function __construct($name, CampaignTargeting $targetings)
    {
        $this->name = $name;
        $this->targetings = $targetings;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


    /**
     * @return \DateTimeImmutable
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTimeInterface $created
     */
    public function setCreated(\DateTimeInterface $created)
    {
        $this->created = f\date_immutable($created);
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTimeInterface $updated
     */
    public function setUpdated(\DateTimeInterface $updated)
    {
        $this->updated = f\date_immutable($updated);
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param \DateTimeInterface $dateStart
     */
    public function setDateStart(\DateTimeInterface $dateStart)
    {
        $this->dateStart = f\date_immutable($dateStart);
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param \DateTimeInterface $dateEnd
     */
    public function setDateEnd(\DateTimeInterface $dateEnd)
    {
        $this->dateEnd = f\date_immutable($dateEnd);
    }


    /**
     * @return string
     */
    public function getBudgetLimitDay()
    {
        return $this->budgetLimitDay;
    }

    /**
     * @param string $budgetLimitDay
     */
    public function setBudgetLimitDay($budgetLimitDay)
    {
        $this->budgetLimitDay = $budgetLimitDay;
    }

    /**
     * @return string
     */
    public function getBudgetLimit()
    {
        return $this->budgetLimit;
    }

    /**
     * @param string $budgetLimit
     */
    public function setBudgetLimit($budgetLimit)
    {
        $this->budgetLimit = $budgetLimit;
    }


    /**
     * @return Mixing
     */
    public function getMixing()
    {
        return $this->mixing;
    }

    /**
     * @param Mixing $mixing
     */
    public function setMixing($mixing)
    {
        $this->mixing = $mixing;
    }

    /**
     * @return CampaignTargeting
     */
    public function getTargetings()
    {
        return $this->targetings;
    }

    /**
     * @param CampaignTargeting $targetings
     */
    public function setTargetings($targetings)
    {
        $this->targetings = $targetings;
    }


    /**
     * @return string
     */
    public function getAgeRestrictions()
    {
        return $this->ageRestrictions;
    }

    /**
     * @param string $ageRestrictions
     */
    public function setAgeRestrictions($ageRestrictions)
    {
        $this->ageRestrictions = $ageRestrictions;
    }


    /**
     * @return bool
     */
    public function isEnableUtm()
    {
        return $this->enableUtm;
    }

    /**
     * @param bool $enableUtm
     */
    public function setEnableUtm($enableUtm)
    {
        $this->enableUtm = $enableUtm;
    }

    /**
     * @return string
     */
    public function getUtm()
    {
        return $this->utm;
    }

    /**
     * @param string $utm
     */
    public function setUtm($utm)
    {
        $this->utm = $utm;
    }

    /**
     * @return int
     */
    public function getUniqShowsLimit()
    {
        return $this->uniqShowsLimit;
    }

    /**
     * @param int $uniqShowsLimit
     */
    public function setUniqShowsLimit($uniqShowsLimit)
    {
        $this->uniqShowsLimit = $uniqShowsLimit;
    }

    /**
     * @return string
     */
    public function getUniqShowsPeriod()
    {
        return $this->uniqShowsPeriod;
    }

    /**
     * @param string $uniqShowsPeriod
     */
    public function setUniqShowsPeriod($uniqShowsPeriod)
    {
        $this->uniqShowsPeriod = $uniqShowsPeriod;
    }

    /**
     * @return int
     */
    public function getBannerUniqShowsLimit()
    {
        return $this->bannerUniqShowsLimit;
    }

    /**
     * @param int $bannerUniqShowsLimit
     */
    public function setBannerUniqShowsLimit($bannerUniqShowsLimit)
    {
        $this->bannerUniqShowsLimit = $bannerUniqShowsLimit;
    }

    /**
     * @return \string[]
     */
    public function getAuditPixels()
    {
        return $this->auditPixels;
    }

    /**
     * @param \string[] $auditPixels
     */
    public function setAuditPixels($auditPixels)
    {
        $this->auditPixels = $auditPixels;
    }

    /**
     * @param BaseObject[] $issues
     */
    public function setIssues(array $issues): void
    {
        $this->issues = $issues;
    }

    /**
     * @return BaseObject[]
     */
    public function getIssues(): array
    {
        return $this->issues;
    }

    /**
     * @return CampaignDelivery
     */
    public function getDelivery(): CampaignDelivery
    {
        return $this->delivery;
    }

    /**
     * @param CampaignDelivery $delivery
     */
    public function setDelivery(CampaignDelivery $delivery): void
    {
        $this->delivery = $delivery;
    }

    /**
     * @return AutobiddingMode
     */
    public function getAutobiddingMode(): AutobiddingMode
    {
        return $this->autobiddingMode;
    }

    /**
     * @param AutobiddingMode $autobiddingMode
     */
    public function setAutobiddingMode(AutobiddingMode $autobiddingMode): void
    {
        $this->autobiddingMode = $autobiddingMode;
    }

    /**
     * @return string
     */
    public function getCrMaxPrice(): string
    {
        return $this->crMaxPrice;
    }

    /**
     * @param string $crMaxPrice
     */
    public function setCrMaxPrice(string $crMaxPrice): void
    {
        $this->crMaxPrice = $crMaxPrice;
    }

    /**
     * @return int
     */
    public function getPackageId(): int
    {
        return $this->packageId;
    }

    /**
     * @param int $packageId
     */
    public function setPackageId(int $packageId): void
    {
        $this->packageId = $packageId;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getPricelistId(): int
    {
        return $this->pricelistId;
    }

    /**
     * @param int $pricelistId
     */
    public function setPricelistId(int $pricelistId): void
    {
        $this->pricelistId = $pricelistId;
    }

    /**
     * @return int
     */
    public function getShowsLimit(): int
    {
        return $this->showsLimit;
    }

    /**
     * @param int $showsLimit
     */
    public function setShowsLimit(int $showsLimit): void
    {
        $this->showsLimit = $showsLimit;
    }
}
