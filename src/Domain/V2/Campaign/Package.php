<?php

namespace Koma136\MyTarget\Domain\V2\Campaign;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Enum\Status;
use Koma136\MyTarget\Domain\V2\Campaign\PackagePad;

class Package
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

}