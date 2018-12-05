<?php

namespace Koma136\MyTarget\Domain\V2\Banner;


use Koma136\MyTarget as f;
use Koma136\MyTarget\Domain\V2\Issues;
use Koma136\MyTarget\Domain\V2\Banner\Products;
use Koma136\MyTarget\Domain\V2\Banner\BannerContent;
use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Banner\ModerationReason;
use Koma136\MyTarget\Domain\V2\Banner\Textblock;
use Koma136\MyTarget\Domain\V2\Banner\Urls;
use Koma136\MyTarget\Domain\V2\Enum\ModerationStatus;
use Koma136\MyTarget\Domain\V2\Enum\Status;

/**
 * Class Banner
 * @package Koma136\MyTarget\Domain\V2\Banner
 */
class Banner
{

    /**
     * @var string
     * @Field(name="call_to_action", type="string")
     */
    private $callToAction;
    /**
     * @var int
     * @Field(name="campaign_id", type="int")
     */
    private $campaignId;

    /**
     * @var BannerContent
     * @Field(type="Koma136\MyTarget\Domain\V2\Banner\BannerContent")
     */
    private $content;

    /**
     * @var \DateTimeImmutable
     * @Field(name="created", type="DateTime")
     */
    private $created;

    /**
     * @var string
     * @Field(name="deeplink", type="string")
     */
    private $deeplink;

    /**
     * @var string
     * @Field (name="delivery", type="string")
     */
    private $delivery;
    /**
     * @var int
     * @Field(name="id", type="int")
     */
    private $id;
    /**
     * @var Issues[]
     * @Field(name="issues", type="dict<Koma136\MyTarget\Domain\V2\Issues>")
     */
    private $issues;
    /**
     * @var ModerationReason[]
     * @Field(name="moderation_reasons", type="dict<Koma136\MyTarget\Domain\V2\Banner\ModerationReason>")
     */
    private $moderationReasons;
    /**
     * @var ModerationStatus
     * @Field(name="moderation_status", type="Koma136\MyTarget\Domain\V2\Enum\ModerationStatus")
     */
    private $moderationStatus;

    /**
     * @var Products
     * @Field(name="products", type="Koma136\MyTarget\Domain\V2\Banner\Products")
     */
    private $products;

    /**
     * @var Status
     * @Field(name="status", type="Koma136\MyTarget\Domain\V2\Enum\Status")
     */
    private $status;

    /**
     * @var Textblock[]
     * @Field(name="textblocks", type="dict<Koma136\MyTarget\Domain\V2\Banner\Textblock>")
     */
    private $textblocks;
    /**
     * @var \DateTimeImmutable
     * @Field(name="updated", type="DateTime")
     */
    private $updated;
    /**
     * @var Urls
     * @Field(name="urls", type="Koma136\MyTarget\Domain\V2\Banner\Urls")
     */
    private $urls;
    /**
     * @var bool
     * @Field(name="user_can_request_remoderation", type="bool")
     */
    private $userCanRequestRemoderation;
    /**
     * @var VideoParams
     * @Field(name="video_params", type="Koma136\MyTarget\Domain\V2\Banner\VideoParams")
     */
    private $videoParams;

    /**
     * @return Banner
     */
    public static function create(){
        return new self();
    }


    /**
     * @return string
     */
    public function getCallToAction(): string
    {
        return $this->callToAction;
    }

    /**
     * @param string $callToAction
     * @return $this
     */
    public function setCallToAction(string $callToAction)
    {
        $this->callToAction = $callToAction;
        return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId(): int
    {
        return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return $this
     */
    public function setCampaignId(int $campaignId)
    {
        $this->campaignId = $campaignId;
        return $this;
    }

    /**
     * @return \Koma136\MyTarget\Domain\V2\Banner\BannerContent
     */
    public function getContent(): \Koma136\MyTarget\Domain\V2\Banner\BannerContent
    {
        return $this->content;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Banner\BannerContent $content
     * @return $this
     */
    public function setContent(\Koma136\MyTarget\Domain\V2\Banner\BannerContent $content)
    {
        $this->content = $content;
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
     * @return string
     */
    public function getDeeplink(): string
    {
        return $this->deeplink;
    }

    /**
     * @param string $deeplink
     * @return $this
     */
    public function setDeeplink(string $deeplink)
    {
        $this->deeplink = $deeplink;
        return $this;
    }

    /**
     * @return string
     */
    public function getDelivery(): string
    {
        return $this->delivery;
    }

    /**
     * @param string $delivery
     * @return $this
     */
    public function setDelivery(string $delivery)
    {
        $this->delivery = $delivery;
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
     * @return Issues[]
     */
    public function getIssues(): array
    {
        return $this->issues;
    }

    /**
     * @param Issues[] $issues
     * @return $this
     */
    public function setIssues(array $issues)
    {
        $this->issues = $issues;
        return $this;
    }

    /**
     * @return ModerationReason[]
     */
    public function getModerationReasons(): array
    {
        return $this->moderationReasons;
    }

    /**
     * @param ModerationReason[] $moderationReasons
     * @return $this
     */
    public function setModerationReasons(array $moderationReasons)
    {
        $this->moderationReasons = $moderationReasons;
        return $this;
    }

    /**
     * @return ModerationStatus
     */
    public function getModerationStatus(): ModerationStatus
    {
        return $this->moderationStatus;
    }

    /**
     * @param ModerationStatus $moderationStatus
     * @return $this
     */
    public function setModerationStatus(ModerationStatus $moderationStatus)
    {
        $this->moderationStatus = $moderationStatus;
        return $this;
    }

    /**
     * @return \Koma136\MyTarget\Domain\V2\Banner\Products
     */
    public function getProducts(): \Koma136\MyTarget\Domain\V2\Banner\Products
    {
        return $this->products;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Banner\Products $products
     * @return $this
     */
    public function setProducts(\Koma136\MyTarget\Domain\V2\Banner\Products $products)
    {
        $this->products = $products;
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
     * @return Textblock[]
     */
    public function getTextblocks(): array
    {
        return $this->textblocks;
    }

    /**
     * @param Textblock[] $textblocks
     * @return $this
     */
    public function setTextblocks(array $textblocks)
    {
        $this->textblocks = $textblocks;
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

    /**
     * @return \Koma136\MyTarget\Domain\V2\Banner\Urls
     */
    public function getUrls(): \Koma136\MyTarget\Domain\V2\Banner\Urls
    {
        return $this->urls;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Banner\Urls $urls
     * @return $this
     */
    public function setUrls(\Koma136\MyTarget\Domain\V2\Banner\Urls $urls)
    {
        $this->urls = $urls;
        return $this;
    }

    /**
     * @return bool
     */
    public function isUserCanRequestRemoderation(): bool
    {
        return $this->userCanRequestRemoderation;
    }

    /**
     * @param bool $userCanRequestRemoderation
     * @return $this
     */
    public function setUserCanRequestRemoderation(bool $userCanRequestRemoderation)
    {
        $this->userCanRequestRemoderation = $userCanRequestRemoderation;
        return $this;
    }

    /**
     * @return VideoParams
     */
    public function getVideoParams(): VideoParams
    {
        return $this->videoParams;
    }

    /**
     * @param VideoParams $videoParams
     * @return $this
     */
    public function setVideoParams(VideoParams $videoParams)
    {
        $this->videoParams = $videoParams;
        return $this;
    }


}
