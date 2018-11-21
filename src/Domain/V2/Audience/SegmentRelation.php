<?php

namespace Koma136\MyTarget\Domain\V2\Audience;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Enum\SegmentObjectType;
use Koma136\MyTarget\Domain\V2\Audience\SegmentParam;

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
     * @var SegmentParam
     * @Field (name="params", type="Koma136\MyTarget\Domain\V2\Audience\SegmentParam")
     */
    private $params;

    /**
     * @return SegmentRelation
     */
    public static function create(){
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
     * @return \Koma136\MyTarget\Domain\V2\Audience\SegmentParam
     */
    public function getParams(): \Koma136\MyTarget\Domain\V2\Audience\SegmentParam
    {
        return $this->params;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Audience\SegmentParam $params
     * @return $this
     */
    public function setParams(\Koma136\MyTarget\Domain\V2\Audience\SegmentParam $params)
    {
        $this->params = $params;
        return $this;
    }




}