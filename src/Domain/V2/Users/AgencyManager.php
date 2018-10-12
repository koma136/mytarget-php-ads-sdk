<?php

namespace Koma136\MyTarget\Domain\V2\Users;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Yii\base\BaseObject;
use Koma136\MyTarget\Domain\V2\Users\UserManager;


class AgencyManager extends BaseObject
{
    /**
     * @var UserManager
     * @Field(name="user", type="Koma136\MyTarget\Domain\V2\Users\UserManager")
     */
    private $user;

    /**
     * @return \Koma136\MyTarget\Domain\V2\Users\UserManager
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param \Koma136\MyTarget\Domain\V2\Users\UserManager $user
     */
    public function setUser(UserManager $user)
    {
        $this->user = $user;
    }
}