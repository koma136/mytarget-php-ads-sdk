<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 28.11.18
 * Time: 11:24
 */

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Banner\ContentVariant;

/**
 * Class Content
 * @package Koma136\MyTarget\Domain\V2\Banner
 */
class Content
{
    /**
     * @var int
     * @Field (name="id", type="int")
     */
    private $id;
    /**
     * @var ContentVariant[]
     * @Field (name="variants", type="array<Koma136\MyTarget\Domain\V2\Banner\ContentVariant>")
     */
    private $variants;

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
     * @return ContentVariant[]
     */
    public function getVariants(): array
    {
        return $this->variants;
    }

    /**
     * @param ContentVariant[] $variants
     * @return $this
     */
    public function setVariants(array $variants)
    {
        $this->variants = $variants;
        return $this;
    }
}