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
     * @return ModerationStatus
     */
    public function getModerationStatus()
    {
        return $this->moderationStatus;
    }

    /**
     * @param ModerationStatus $moderationStatus
     */
    public function setModerationStatus($moderationStatus)
    {
        $this->moderationStatus = $moderationStatus;
    }

    /**
     * @return Products
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param Products $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }


    /**
     * @return string
     */
    public function getDeeplink()
    {
        return $this->deeplink;
    }

    /**
     * @param string $deeplink
     */
    public function setDeeplink($deeplink)
    {
        $this->deeplink = $deeplink;
    }

    /**
     * @return string
     */
    public function getCallToAction()
    {
        return $this->callToAction;
    }

    /**
     * @param string $callToAction
     */
    public function setCallToAction($callToAction)
    {
        $this->callToAction = $callToAction;
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
     */
    public function setCampaignId(int $campaignId): void
    {
        $this->campaignId = $campaignId;
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
     */
    public function setContent(\Koma136\MyTarget\Domain\V2\Banner\BannerContent $content): void
    {
        $this->content = $content;
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
     */
    public function setDelivery(string $delivery): void
    {
        $this->delivery = $delivery;
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
     */
    public function setIssues(array $issues): void
    {
        $this->issues = $issues;
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
     */
    public function setModerationReasons(array $moderationReasons): void
    {
        $this->moderationReasons = $moderationReasons;
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
     */
    public function setTextblocks(array $textblocks): void
    {
        $this->textblocks = $textblocks;
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
     */
    public function setUrls(\Koma136\MyTarget\Domain\V2\Banner\Urls $urls): void
    {
        $this->urls = $urls;
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
     */
    public function setVideoParams(VideoParams $videoParams): void
    {
        $this->videoParams = $videoParams;
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
     */
    public function setUserCanRequestRemoderation(bool $userCanRequestRemoderation): void
    {
        $this->userCanRequestRemoderation = $userCanRequestRemoderation;
    }

}
