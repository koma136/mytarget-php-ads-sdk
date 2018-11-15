<?php

namespace Koma136\MyTarget\Domain\V2\Campaign;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Campaign\Campaign;

class Campaigns
{
    /**
     * @var int
     * @Field (type="int")
     */
    private $count;
    /**
     * @var int
     * @Field (type="int")
     */
    private $offset;
    /**
     * @var Campaign[]
     * @Field (type="dict<Koma136\MyTarget\Domain\V2\Campaign\Campaign>")
     */
    private $items;

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @return Campaign[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Campaign[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}