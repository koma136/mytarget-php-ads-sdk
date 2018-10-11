<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class BranchClientsCount extends BaseObject
{
    /**
     * @var int
     * @Field(type="int")
     */
    private $active;

    /**
     * @var int
     * @Field(type="int")
     */
    private $blocked;

    /**
     * @var
     * @Field(type="int")
     */
    private $deleted;

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return int
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * @param $blocked
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
}