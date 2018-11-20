<?php

namespace Koma136\MyTarget\Domain\V2\Audience;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Enum\SegmentObjectType;

class SegmentRelation
{
    /**
     * @var int
     * @Field (name="id", type="int")
     */
    private $id;
    /**
     * @var int
     * @Field (name="object_id", type="int")
     */
    private $objectId;
    /**
     * @var SegmentObjectType
     * @Field (name="object_type", type="Koma136\MyTarget\Domain\V2\Enum\SegmentObjectType")
     */
    private $objectType;
    /**
     * @var object
     * @Field (name="params", type="object")
     */
    private $params;

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
     * @return int
     */
    public function getObjectId(): int
    {
        return $this->objectId;
    }

    /**
     * @param int $objectId
     * @return $this
     */
    public function setObjectId(int $objectId)
    {
        $this->objectId = $objectId;
        return $this;
    }

    /**
     * @return SegmentObjectType
     */
    public function getObjectType(): SegmentObjectType
    {
        return $this->objectType;
    }

    /**
     * @param SegmentObjectType $objectType
     * @return $this
     */
    public function setObjectType(SegmentObjectType $objectType)
    {
        $this->objectType = $objectType;
        return $this;
    }

    /**
     * @return object
     */
    public function getParams(): object
    {
        return $this->params;
    }

    /**
     * @param object $params
     * @return $this
     */
    public function setParams(object $params)
    {
        $this->params = $params;
        return $this;
    }



}