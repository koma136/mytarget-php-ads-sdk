<?php

namespace Koma136\MyTarget\Domain\V1\Campaign\Projection;

use Koma136\MyTarget\Domain\V1\Campaign\Campaign;
use Koma136\MyTarget\Domain\V1\Campaign\Package;
use Koma136\MyTarget\Domain\V1\Targeting\CampaignTargeting;
use Koma136\MyTarget\Domain\V1\User;
use Koma136\MyTarget\Mapper\Annotation\Field;

class ProjectionCampaign extends Campaign
{
    /**
     * @var User
     * @Field(type="Koma136\MyTarget\Domain\V1\User")
     */
    private $user;

    public function __construct(Package $package, CampaignTargeting $targeting, User $user)
    {
        parent::__construct(null, $package, $targeting);

        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}
