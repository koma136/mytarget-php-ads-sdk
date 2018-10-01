<?php

namespace Koma136\MyTarget\Domain\V1\Targeting;

use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingTargeting
{
    /**
     * @var int
     * @Field(name="id", type="int")
     */
    private $id;

    /**
     * @var string
     * @Field(type="string")
     */
    private $name;

    /**
     * @param int $id
     * @return RemarketingTargeting
     */
    public static function withId($id)
    {
        return new RemarketingTargeting($id, null);
    }

    /**
     * @param int $id
     * @param string $name
     */
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

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
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
