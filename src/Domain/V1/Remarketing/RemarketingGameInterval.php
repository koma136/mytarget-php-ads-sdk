<?php

namespace Koma136\MyTarget\Domain\V1\Remarketing;

use Koma136\MyTarget\Domain\V1\Enum\RemarketingType;
use Koma136\MyTarget\Mapper\Annotation\Field;

class RemarketingGameInterval extends RemarketingInterval
{
    /**
     * @var string
     * @Field(type="string")
     */
    private $game;

    /**
     * @param string $game
     * @param int $left
     * @param int $right
     * @param RemarketingType $type
     */
    public function __construct($game, $left, $right, RemarketingType $type)
    {
        parent::__construct($left, $right, $type);

        $this->game = $game;
    }

    /**
     * @return string
     */
    public function getGame()
    {
        return $this->game;
    }
}
