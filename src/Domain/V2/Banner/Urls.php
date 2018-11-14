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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
     * @return string
     */
    public function getUrlObjectId(): string
    {
        return $this->urlObjectId;
    }

    /**
     * @param string $urlObjectId
     */
    public function setUrlObjectId(string $urlObjectId): void
    {
        $this->urlObjectId = $urlObjectId;
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
     */
    public function setUrlObjectType(string $urlObjectType): void
    {
        $this->urlObjectType = $urlObjectType;
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
     */
    public function setUrlTypes(string $urlTypes): void
    {
        $this->urlTypes = $urlTypes;
    }
}