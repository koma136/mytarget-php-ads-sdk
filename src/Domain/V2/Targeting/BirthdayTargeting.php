<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 23.11.18
 * Time: 18:28
 */

namespace Koma136\MyTarget\Domain\V2\Targeting;

use Koma136\MyTarget\Mapper\Annotation\Field;

/**
 * Class BirthdayTargeting
 * @package Koma136\MyTarget\Domain\V2\Targeting
 */

class BirthdayTargeting
{
    /**
     * @var int
     * @Field (name="days_after", type="int")
     */
    private $days_after;
    /**
     * @var int
     * @Field (name="days_before", type="int")
     */
    private $days_before;

    /**
     * @return int
     */
    public function getDaysAfter(): int
    {
        return $this->days_after;
    }

    /**
     * @param int $days_after
     * @return $this
     */
    public function setDaysAfter(int $days_after)
    {
        $this->days_after = $days_after;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysBefore(): int
    {
        return $this->days_before;
    }

    /**
     * @param int $days_before
     * @return $this
     */
    public function setDaysBefore(int $days_before)
    {
        $this->days_before = $days_before;
        return $this;
    }


}