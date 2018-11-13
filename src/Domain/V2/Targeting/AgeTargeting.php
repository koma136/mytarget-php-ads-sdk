<?php
namespace Koma136\MyTarget\Domain\V2\Targeting;

use Koma136\MyTarget\Mapper\Annotation\Field;

class AgeTargeting
{
    /**
     * @var int[]
     * @Field(name="age_list", type="array<int>")
     */
    private $ageList;
    /**
     * @var bool
     * @Field(name="expand", type="bool")
     */
    private $expand;


    /**
     * @return int[]
     */
    public function getAgeList()
    {
        return $this->ageList;
    }

    /**
     * @param int[] $age_list
     */
    public function setAgeList($ageList)
    {
        $this->ageList = $ageList;
    }

    /**
     * @return bool
     */
    public function isExpand(){
        return $this->expand;
    }

    /**
     * @param bool $expand
     */
    public function setExpand($expand){
        $this->expand = $expand;
    }

}