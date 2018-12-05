<?php

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Banner\BannerCampaign;

/**
 * Class BannerFormat
 * @package Koma136\MyTarget\Domain\V2\Banner
 */
class BannerFormat
{
    /**
     * @var string
     * @Field (name="description", type="string")
     */
    private $description;
    /**
     * @var BannerCampaign
     * @Field (name="fields", type="Koma136\MyTarget\Domain\V2\Banner\BannerCampaign")
     */
    private $fields;
    /**
     * @var int
     * @Field (name="id", type="int")
     */
    private $id;
    /**
     * @var string
     * @Field (name="name", type="string")
     */
    private $name;

    /**
     * @return BannerFormat
     */
    public static function create()
    {
        return new self();
    }

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
     * @return \Koma136\MyTarget\Domain\V2\Banner\BannerCampaign
     */
    public function getFields(): \Koma136\MyTarget\Domain\V2\Banner\BannerCampaign
    {
        return $this->fields;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Banner\BannerCampaign $fields
     * @return $this
     */
    public function setFields(\Koma136\MyTarget\Domain\V2\Banner\BannerCampaign $fields)
    {
        $this->fields = $fields;
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

}