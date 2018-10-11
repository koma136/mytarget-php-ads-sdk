<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class AgencyClientsCount extends BaseObject
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
     * @return mixed
     */
    public function setActive($active)
    {
        return $this->active = $active;
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
     * @return mixed
     */
    public function setBlocked($blocked)
    {
        return $this->blocked = $blocked;
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
     * @return mixed
     */
    public function setDeleted($deleted)
    {
        return $this->deleted = $deleted;
    }
}