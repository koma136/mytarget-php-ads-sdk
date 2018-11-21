<?php

namespace Koma136\MyTarget\Domain\V2\Audience;

use Koma136\MyTarget\Mapper\Annotation\Field;

use Koma136\MyTarget\Domain\V2\Audience\SegmentRelation;
use Koma136\MyTarget\Domain\V2\Audience\SegmentUser;

class Segment
{
    /**
     * @var int[]
     * @Field (name="campaign_ids", type"dict<int>")
     */
    private $campaignIds;
    /**
     * @var \DateTimeImmutable
     * @Field(name="created", type="DateTime")
     */
    private $created;
    /**
     * @var string[]
     * @Field(name="flags", type="dict<string>")
     */
    private $flags;
    /**
     * @var int
     * @Field(type="int")
     */
    private $id;
    /**
     * @var string
     * @Field(name="name", type="string")
     */
    private $name;
    /**
     * @var int
     * @Field(type="int", name="pass_condition")
     */
    private $passCondition;
    /**
     * @var SegmentRelation[]
     * @Field (name="relations", type="dict<Koma136\MyTarget\Domain\V2\Audience\SegmentRelation>")
     */
    private $relations;
    /**
     * @var int
     * @Field (name="relations_count", type="int")
     */
    private $relationsCount;
    /**
     * @var \DateTimeImmutable
     * @Field(name="updated", type="DateTime")
     */
    private $updated;
    /**
     * @var SegmentUser[]
     * @Field (name="users", type="dict<Koma136\MyTarget\Domain\V2\Audience\SegmentUser>")
     */
    private $users;

    /**
     * @return Segment
     */
    public static function create(){
        return new self();
    }

    /**
     * @return int[]
     */
    public function getCampaignIds(): array
    {
        return $this->campaignIds;
    }

    /**
     * @param int[] $campaignIds
     * @return $this
     */
    public function setCampaignIds(array $campaignIds)
    {
        $this->campaignIds = $campaignIds;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreated(): \DateTimeImmutable
    {
        return $this->created;
    }

    /**
     * @param \DateTimeImmutable $created
     * @return $this
     */
    public function setCreated(\DateTimeImmutable $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getFlags(): array
    {
        return $this->flags;
    }

    /**
     * @param string[] $flags
     * @return $this
     */
    public function setFlags(array $flags)
    {
        $this->flags = $flags;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getPassCondition(): int
    {
        return $this->passCondition;
    }

    /**
     * @param int $passCondition
     * @return $this
     */
    public function setPassCondition(int $passCondition)
    {
        $this->passCondition = $passCondition;
        return $this;
    }

    /**
     * @return SegmentRelation[]
     */
    public function getRelations(): array
    {
        return $this->relations;
    }

    /**
     * @param SegmentRelation[] $relations
     * @return $this
     */
    public function setRelations(array $relations)
    {
        $this->relations = $relations;
        return $this;
    }

    /**
     * @return int
     */
    public function getRelationsCount(): int
    {
        return $this->relationsCount;
    }

    /**
     * @param int $relationsCount
     * @return $this
     */
    public function setRelationsCount(int $relationsCount)
    {
        $this->relationsCount = $relationsCount;
        return $this;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdated(): \DateTimeImmutable
    {
        return $this->updated;
    }

    /**
     * @param \DateTimeImmutable $updated
     * @return $this
     */
    public function setUpdated(\DateTimeImmutable $updated)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @return SegmentUser[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param SegmentUser[] $users
     * @return $this
     */
    public function setUsers(array $users)
    {
        $this->users = $users;
        return $this;
    }


}