<?php

namespace tests\Koma136\MyTarget\Mapper\Type;

use Koma136\MyTarget\Mapper\Annotation\Field;

class ObjectParentStub
{
    /**
     * @var string
     * @Field(type="string")
     */
    private $stringValue;

    /**
     * ObjectParentStub constructor.
     *
     * @param $stringValue
     */
    public function __construct($stringValue)
    {
        $this->stringValue = $stringValue;
    }

    /**
     * @return string
     */
    public function getStringValue()
    {
        return $this->stringValue;
    }
}
