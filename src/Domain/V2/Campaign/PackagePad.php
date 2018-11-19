<?php

namespace Koma136\MyTarget\Domain\V2\Campaign;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Campaign\EyeUrl;

class PackagePad
{
    /**
     * @var string
     * @Field (type="string")
     */
    private $description;
    /**
     * @var EyeUrl
     * @Field (type="Koma136\MyTarget\Domain\V2\Campaign\EyeUrl")
     */
    private $eye_url;
    /**
     * @var int
     * @Field (type="int")
     */
    private $id;
    /**
     * @var string
     * @Field (type="string")
     */
    private $name;
    /**
     * @var string
     * @Field (type="string")
     */
    private $patterns;

    /**
     * @return PackagePad
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return \Koma136\MyTarget\Domain\V2\Campaign\EyeUrl
     */
    public function getEyeUrl(): \Koma136\MyTarget\Domain\V2\Campaign\EyeUrl
    {
        return $this->eye_url;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Campaign\EyeUrl $eye_url
     * @return $this
     */
    public function setEyeUrl(\Koma136\MyTarget\Domain\V2\Campaign\EyeUrl $eye_url)
    {
        $this->eye_url = $eye_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
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
    public function getPatterns(): string
    {
        return $this->patterns;
    }

    /**
     * @param string $patterns
     * @return $this
     */
    public function setPatterns(string $patterns)
    {
        $this->patterns = $patterns;
        return $this;
    }
}