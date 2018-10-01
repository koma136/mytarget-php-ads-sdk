<?php

namespace Koma136\MyTarget\Mapper\Type;

use Koma136\MyTarget\Mapper\Mapper;

class MixedType implements Type
{
    /**
     * @inheritdoc
     */
    public function hydrated($value, $type, Mapper $mapper)
    {
        return $value;
    }

    /**
     * @inheritdoc
     */
    public function snapshot($value, $type, Mapper $mapper)
    {
        return $value;
    }
}
