<?php
namespace Koma136\MyTarget\Domain\V2\Audience;

use Koma136\MyTarget\Mapper\Annotation\Field;

class SegmentUser
{
    /**
     * @var int
     * @Field (name="id", type="int")
     */
    private $id;
    /**
     * @var string
     * @Field (name="type", type="string")
     */
    private $type;
    /**
     * @var string
     * @Field (name="username", type="string")
     */
    private $username;

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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return $this
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
        return $this;
    }


}