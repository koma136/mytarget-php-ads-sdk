<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 04.12.18
 * Time: 14:11
 */

namespace Koma136\MyTarget\Domain\V2\Banner;

use Koma136\MyTarget\Mapper\Annotation\Field;

class Url
{
    /**
     * @var string[]
     * @Field (name="counters", type="array<string>")
     */
    private $counters;
    /**
     * @var boolean
     * @Field (name="has_goals", type="boolean")
     */
    private $has_goals;
    /**
     * @var int
     * @Field (name="id", type="int")
     */
    private $id;
    /**
     * @var string
     * @Field (name="preview_link", type="string")
     */
    private $preview_link;
    /**
     * @var string
     * @Field (name="url", type="string")
     */
    private $url;
    /**
     * @var string[]
     * @Field (name="url_types", type="array<string>")
     */
    private $url_types;

    /**
     * @return Url
     */
    public static function create()
    {
        return new self();
    }

    /**
     * @return string[]
     */
    public function getCounters(): array
    {
        return $this->counters;
    }

    /**
     * @param string[] $counters
     * @return $this
     */
    public function setCounters(array $counters)
    {
        $this->counters = $counters;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasGoals(): bool
    {
        return $this->has_goals;
    }

    /**
     * @param bool $has_goals
     * @return $this
     */
    public function setHasGoals(bool $has_goals)
    {
        $this->has_goals = $has_goals;
        return $this;
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
    public function getPreviewLink(): string
    {
        return $this->preview_link;
    }

    /**
     * @param string $preview_link
     * @return $this
     */
    public function setPreviewLink(string $preview_link)
    {
        $this->preview_link = $preview_link;
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
     * @return string[]
     */
    public function getUrlTypes(): array
    {
        return $this->url_types;
    }

    /**
     * @param string[] $url_types
     * @return $this
     */
    public function setUrlTypes(array $url_types)
    {
        $this->url_types = $url_types;
        return $this;
    }


}