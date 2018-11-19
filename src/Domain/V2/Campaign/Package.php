<?php

namespace Koma136\MyTarget\Domain\V2\Campaign;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Enum\Status;
use Koma136\MyTarget\Domain\V2\Campaign\PackagePad;
use yii\base\BaseObject;

class Package extends BaseObject
{
    /**
     * @var int
     * @Field(name="banner_format_id", type="int")
     */
    private $bannerFormatId;
    /**
     * @var string
     * @Field(name="banner_url_get_params", type="string")
     */
    private $bannerUrlGetParams;
    /**
     * @var \DateTimeImmutable
     * @Field(name="created", type="DateTime<H:m d.m.Y>")
     */
    private $created;
    /**
     * @var string
     * @Field(name="description", type="string")
     */
    private $description;
    /**
     * @var int
     * @Field(name="id", type="int")
     */
    private $id;
    /**
     * @var float
     *  @Field(name="max_price_per_unit", type="float")
     */
    private $maxPricePerUnit;
    /**
     * @var int
     * @Field(name="max_uniq_shows_limit", type="int")
     */
    private $maxUniqShowsLimit;
    /**
     * @var string
     * @Field(name="name", type="string")
     */
    private $name;
    /**
     * @var PackagePad
     * @Field (type="Koma136\MyTarget\Domain\V2\Campaign\PackagePad")
     */
    private $options;
    /**
     * @var string
     * @Field(type="string", name="package_request")
     */
    private $packageRequest;
    /**
     * @var int
     * @Field(name="pads_tree_id", type="int")
     */
    private $padsTreeId;
    /**
     * @var float
     * @Field(type="float")
     */
    private $price;
    /**
     * @var int
     * @Field(name="priced_event_type", type="int")
     */
    private $pricedEventType;
    /**
     * @var int[]
     * @Field(name="related_package_ids", type="dict<int>")
     */
    private $relatedPackageIds;
    /**
     * @var Status
     * @Field(name="status", type="Koma136\MyTarget\Domain\V1\Enum\Status")
     */
    private $status;
    /**
     * @var \DateTimeImmutable
     * @Field(name="updated", type="DateTime")
     */
    private $updated;
    /**
     * @var string[]
     * @Field(name="url_types", type="array<string>")
     */
    private $urlTypes;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
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
     * @return $this
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
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
     * @return string[]
     */
    public function getUrlTypes(): array
    {
        return $this->urlTypes;
    }

    /**
     * @param string[] $urlTypes
     * @return $this
     */
    public function setUrlTypes(array $urlTypes)
    {
        $this->urlTypes = $urlTypes;
        return $this;
    }

    /**
     * @return int
     */
    public function getBannerFormatId(): int
    {
        return $this->bannerFormatId;
    }

    /**
     * @param int $bannerFormatId
     * @return $this
     */
    public function setBannerFormatId(int $bannerFormatId)
    {
        $this->bannerFormatId = $bannerFormatId;
        return $this;
    }

    /**
     * @return string
     */
    public function getBannerUrlGetParams(): string
    {
        return $this->bannerUrlGetParams;
    }

    /**
     * @param string $bannerUrlGetParams
     * @return $this
     */
    public function setBannerUrlGetParams(string $bannerUrlGetParams)
    {
        $this->bannerUrlGetParams = $bannerUrlGetParams;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreated(): \DateTimeImmutable
    {
        return $this->created;
    }

    /**
     * @param \DateTimeImmutable $created
     * @return $this
     */
    public function setCreated(\DateTimeImmutable $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxPricePerUnit(): float
    {
        return $this->maxPricePerUnit;
    }

    /**
     * @param float $maxPricePerUnit
     * @return $this
     */
    public function setMaxPricePerUnit(float $maxPricePerUnit)
    {
        $this->maxPricePerUnit = $maxPricePerUnit;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxUniqShowsLimit(): int
    {
        return $this->maxUniqShowsLimit;
    }

    /**
     * @param int $maxUniqShowsLimit
     * @return $this
     */
    public function setMaxUniqShowsLimit(int $maxUniqShowsLimit)
    {
        $this->maxUniqShowsLimit = $maxUniqShowsLimit;
        return $this;
    }

    /**
     * @return \Koma136\MyTarget\Domain\V2\Campaign\PackagePad
     */
    public function getOptions(): \Koma136\MyTarget\Domain\V2\Campaign\PackagePad
    {
        return $this->options;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Campaign\PackagePad $options
     * @return $this
     */
    public function setOptions(\Koma136\MyTarget\Domain\V2\Campaign\PackagePad $options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return string
     */
    public function getPackageRequest(): string
    {
        return $this->packageRequest;
    }

    /**
     * @param string $packageRequest
     * @return $this
     */
    public function setPackageRequest(string $packageRequest)
    {
        $this->packageRequest = $packageRequest;
        return $this;
    }

    /**
     * @return int
     */
    public function getPadsTreeId(): int
    {
        return $this->padsTreeId;
    }

    /**
     * @param int $padsTreeId
     * @return $this
     */
    public function setPadsTreeId(int $padsTreeId)
    {
        $this->padsTreeId = $padsTreeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPricedEventType(): int
    {
        return $this->pricedEventType;
    }

    /**
     * @param int $pricedEventType
     * @return $this
     */
    public function setPricedEventType(int $pricedEventType)
    {
        $this->pricedEventType = $pricedEventType;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getRelatedPackageIds(): array
    {
        return $this->relatedPackageIds;
    }

    /**
     * @param int[] $relatedPackageIds
     * @return $this
     */
    public function setRelatedPackageIds(array $relatedPackageIds)
    {
        $this->relatedPackageIds = $relatedPackageIds;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdated(): \DateTimeImmutable
    {
        return $this->updated;
    }

    /**
     * @param \DateTimeImmutable $updated
     * @return $this
     */
    public function setUpdated(\DateTimeImmutable $updated)
    {
        $this->updated = $updated;
        return $this;
    }
}