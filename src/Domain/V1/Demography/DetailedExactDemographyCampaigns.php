<?php

namespace Koma136\MyTarget\Domain\V1\Demography;

use Koma136\MyTarget\Mapper\Annotation\Field;

class DetailedExactDemographyCampaigns
{

    /**
     * @var DetailedExactDemography[]
     * @Field(type="array<Koma136\MyTarget\Domain\V1\DetailedExactDemography>")
     */
    private $campaigns;

    /**
     * @return DetailedExactDemography[]
     */
    public function getCampaigns()
    {
        return $this->campaigns;
    }

}
