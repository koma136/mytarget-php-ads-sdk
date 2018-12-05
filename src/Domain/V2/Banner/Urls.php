<?php

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;

class Urls
{
    /**
     * @var int
     * @Field (name="id", type="int")
     */
    private $id;
    /**
     * @var string
     * @Field (name="url", type="string")
     */
    private $url;
    /**
     * @var string
     * @Field (name="url_object_id", type="string")
     */
    private $urlObjectId;
    /**
     * @var string
     * @Field (name="url_object_type", type="string")
     */
    private $urlObjectType;
    /**
     * @var string
     * @Field (name="url_types", type="string")
     */
    private $urlTypes;

    /**
     * @return Urls
     */
    public static function create()
    {
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
     * @return string
     */
    public function getUrlObjectId(): string
    {
        return $this->urlObjectId;
    }

    /**
     * @param string $urlObjectId
     * @return $this
     */
    public function setUrlObjectId(string $urlObjectId)
    {
        $this->urlObjectId = $urlObjectId;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlObjectType(): string
    {
        return $this->urlObjectType;
    }

    /**
     * @param string $urlObjectType
     * @return $this
     */
    public function setUrlObjectType(string $urlObjectType)
    {
        $this->urlObjectType = $urlObjectType;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlTypes(): string
    {
        return $this->urlTypes;
    }

    /**
     * @param string $urlTypes
     * @return $this
     */
    public function setUrlTypes(string $urlTypes)
    {
        $this->urlTypes = $urlTypes;
        return $this;
    }
}