<?php

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;

class ContentVariant
{
    /**
     * @var int
     * @Field(type="int")
     */
    private $height;
    /**
     * @var int
     * @Field(type="int")
     */
    private $size;
    /**
     * @var string
     * @Field(type="string")
     */
    private $url;
    /**
     * @var int
     * @Field(type="int")
     */
    private $width;

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }
    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}