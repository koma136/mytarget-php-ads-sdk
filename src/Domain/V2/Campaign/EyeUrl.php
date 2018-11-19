<?php
namespace Koma136\MyTarget\Domain\V2\Campaign;

use Koma136\MyTarget\Mapper\Annotation\Field;

class EyeUrl
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
    private $url;
    /**
     * @var string
     * @Field(type="string")
     */
    private $description;

    /**
     * @return EyeUrl
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
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}