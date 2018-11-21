<?php

namespace Koma136\MyTarget\Domain\V2\Audience;

use Koma136\MyTarget\Mapper\Annotation\Field;


class SegmentParam
{
    /**
     * @var
     * @Field (name="counter_id", type="")
     */
    private $counterId;

    /**
     * @return SegmentParam
     */
    public static function create()
    {
        return new self();
    }
    /**
     * @return mixed
     */
    public function getCounterId()
    {
        return $this->counterId;
    }

    /**
     * @param mixed $counterId
     * @return $this
     */
    public function setCounterId($counterId)
    {
        $this->counterId = $counterId;
        return $this;
    }



}