<?php

namespace Koma136\MyTarget\Domain\V1\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;

class Html
{
    /**
     * @var int
     * @Field(name="id", type="int")
     */
    private $id;

    /**
     * @var string
     * @Field(name="url", type="string")
     */
    private $url;

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
    public function getUrl()
    {
        return $this->url;
    }
}
