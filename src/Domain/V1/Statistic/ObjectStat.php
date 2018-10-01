<?php

namespace Koma136\MyTarget\Domain\V1\Statistic;

use Koma136\MyTarget\Mapper\Annotation\Field;

abstract class ObjectStat
{
    /**
     * @var int
     * @Field(type="int")
     */
    private $id;

    /**
     * @var string
     * @Field(type="string")
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return StatisticRow
     */
    abstract public function getTotal();

    /**
     * @return StatisticRow[]
     */
    public abstract function getDetailed();
}
