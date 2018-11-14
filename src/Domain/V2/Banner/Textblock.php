<?php

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;

class Textblock
{
    /**
     * @var string
     * @Field(name="text", type="string")
     */
    private $text;
    /**
     * @var string
     * @Field(name="title", type="string")
     */
    private $title;

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}