<?php

namespace Koma136\MyTarget\Domain\V2\Banner;

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
     * @var string
     * @Field(name="type", type="string")
     */
    private $type;
    /**
     * @var ContentVariant
     * @Field(name="variants", type="Koma136\MyTarget\Domain\V2\Banner\ContentVariant")
     */
    private $variants;

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
     */
    public function setVariants(\Koma136\MyTarget\Domain\V2\Banner\ContentVariant $variants): void
    {
        $this->variants = $variants;
    }
}