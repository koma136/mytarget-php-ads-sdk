<?php

namespace Koma136\MyTarget\Domain\V2\Audience;

use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V2\Audience\Segment;

/**
 * Class Segments
 * @package Koma136\MyTarget\Domain\V2\Audience
 */
class Segments
{
    /**
     * @var Segment[]
     * @Field (name="items", type="dict<Koma136\MyTarget\Domain\V2\Audience\Segment>")
     */
    private $items;
    /**
     * @var int
     * @Field (name="count", type="int")
     */
    private $count;
    /**
     * @var int
     * @Field (name="offset", type="int")
     */
    private $offset;
    /**
     * @var int
     * @Field (name="limit", type="int")
     */
    private $limit;

    /**
     * @return Segment[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Segment[] $items
     * @return $this
     */
    public function setItems(array $items)
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return $this
     */
    public function setCount(int $count)
    {
        $this->count = $count;
        return $this;
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
     * @return $this
     */
    public function setOffset(int $offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit)
    {
        $this->limit = $limit;
        return $this;
    }

}