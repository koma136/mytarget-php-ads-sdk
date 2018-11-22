<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 22.11.18
 * Time: 15:13
 */

namespace Koma136\MyTarget\Domain\V2\Top;
use Koma136\MyTarget\Mapper\Annotation\Field;

class TopMailCategory
{
    /**
     * @var integer
     * @Field (name="id", type="integer")
     */
     private $id;
    /**
     * @var string
     * @Field (name="nick", type="string")
     */
     private $nick;
    /**
     * @var string
     * @Field (name="name", type="string")
     */
     private $name;
    /**
     * @var TopMailCategory[]
     * @Field (name="childs", type="dict<Koma136\MyTarget\Domain\V2\Top\TopMailCategory>")
     */
     private $childs;

    /**
     * @return TopMailCategory
     */
     public function create()
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
    public function getNick(): string
    {
        return $this->nick;
    }

    /**
     * @param string $nick
     * @return $this
     */
    public function setNick(string $nick)
    {
        $this->nick = $nick;
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
     * @return TopMailCategory[]
     */
    public function getChilds(): array
    {
        return $this->childs;
    }

    /**
     * @param TopMailCategory[] $childs
     * @return $this
     */
    public function setChilds(array $childs)
    {
        $this->childs = $childs;
        return $this;
    }


}