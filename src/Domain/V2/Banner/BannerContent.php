<?php

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Domain\V2\Enum\ContentType;
use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Banner\ContentVariant;

class BannerContent
{
    /**
     * @var int
     * @Field(name="id", type="int")
     */
    private $id;
    /**
     * @var ContentType
     * @Field(name="type", type="Koma136\MyTarget\Domain\V2\Enum\ContentType")
     */
    private $type;
    /**
     * @var ContentVariant
     * @Field(name="variants", type="Koma136\MyTarget\Domain\V2\Banner\ContentVariant")
     */
    private $variants;

    /**
     * @return BannerContent
     */
    public static function create()
    {
        return new self();
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
     * @return ContentType
     */
    public function getType(): ContentType
    {
        return $this->type;
    }

    /**
     * @param ContentType $type
     * @return $this
     */
    public function setType(ContentType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return \Koma136\MyTarget\Domain\V2\Banner\ContentVariant
     */
    public function getVariants(): \Koma136\MyTarget\Domain\V2\Banner\ContentVariant
    {
        return $this->variants;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Banner\ContentVariant $variants
     * @return $this
     */
    public function setVariants(\Koma136\MyTarget\Domain\V2\Banner\ContentVariant $variants)
    {
        $this->variants = $variants;
        return $this;
    }
}