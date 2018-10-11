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
     */
    public function setClientName($clientName)
    {
        $this->client_name = $clientName;
    }
}