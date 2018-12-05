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
     * @return Textblock
     */
   public static  function create()
   {
       return new self();
   }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return $this
     */
    public function setText(string $text)
    {
        $this->text = $text;
        return $this;
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
     * @return $this
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }



}