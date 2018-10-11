<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class ManagerClientInfo extends BaseObject
{
    /**
     * @var string
     * @Field(name="access_type", type="string")
     */
    private $accessType;

    /**
     * @var int
     * @Field(type="string")
     */
    private $id;

    /**
     * @return string
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * @param $accessType
     * @return mixed
     */
    public function setAccessType($accessType)
    {
        return $this->accessType = $accessType;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function setId($id)
    {
        return $this->id = $id;
    }
}