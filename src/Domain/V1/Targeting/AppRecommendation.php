<?php

namespace Koma136\MyTarget\Domain\V1\Targeting;

use Koma136\MyTarget\Mapper\Annotation\Field;

class AppRecommendation
{
    /**
     * @var int
     * @Field(name="score_threshold", type="int")
     */
    private $scoreThreshold;

    /**
     * @param int $scoreThreshold
     */
    public function __construct($scoreThreshold)
    {
        $this->scoreThreshold = $scoreThreshold;
    }

    /**
     * @return int
     */
    public function getScoreThreshold()
    {
        return $this->scoreThreshold;
    }
}
