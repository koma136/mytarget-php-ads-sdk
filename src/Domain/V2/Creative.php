<?php

namespace Koma136\MyTarget\Domain\V2;

use Koma136\MyTarget\Domain\V2\Enum\CreativeType;
use Koma136\MyTarget\Mapper\Annotation\Field;

class Creative
{
    /**
     * @var int
     * @Field(name="id", type="int")
     */
    private $id;

    /**
     * @var CreativeVariant[]
     * @Field(type="dict<Koma136\MyTarget\Domain\V2\CreativeVariant>")
     */
    private $variants;

    /**
     * @var CreativeType
     * @Field(type="Koma136\MyTarget\Domain\V2\Enum\CreativeType")
     */
    private $type;

    /**
     * @param int $id
     * @param CreativeVariant[] $variants
     */
    public function __construct($id, array $variants)
    {
        $this->id = $id;
        $this->variants = $variants;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return CreativeVariant[]
     */
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * @return CreativeType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param CreativeType $type
     */
    public function setType(CreativeType $type)
    {
        $this->type = $type;
    }
}
