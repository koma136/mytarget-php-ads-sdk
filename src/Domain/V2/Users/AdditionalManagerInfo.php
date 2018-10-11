<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;


class AdditionalManagerInfo extends BaseObject
{
    /**
     * @var string
     * @Field(type="string")
     */
    private $client_name;

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->client_name;
    }

    /**
     * @param $clientName
     * @return mixed
     */
    public function setClientName($clientName)
    {
        return $this->client_name = $clientName;
    }
}