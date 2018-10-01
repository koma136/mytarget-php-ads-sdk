<?php

namespace Koma136\MyTarget\Domain\V1\Targeting;


use Koma136\MyTarget\Mapper\Annotation\Field;
use Koma136\MyTarget\Domain\V1\Enum\LocalGeoLocType;
use Koma136\MyTarget\Domain\V1\Enum\LocalGeoVisitType;

class LocalGeo
{
    /**
     * @var LocalGeoVisitType
     * @Field(name="type", type="Koma136\MyTarget\Domain\V1\Enum\LocalGeoVisitType")
     */
    private $type;

    /**
     * @var Location[]
     * @Field(name="regions", type="array<\Koma136\MyTarget\Domain\V1\Targeting\Location>")
     */
    private $regions;

    /**
     * @var LocalGeoLocType
     * @Field(name="loc_type", type="Koma136\MyTarget\Domain\V1\Enum\LocalGeoLocType")
     */
    private $locType;

    /**
     * @param LocalGeoVisitType $type
     * @param Location[] $regions
     * @param LocalGeoLocType $locType
     */
    public function __construct(LocalGeoVisitType $type, array $regions, LocalGeoLocType $locType)
    {
        $this->type = $type;
        $this->regions = $regions;
        $this->locType = $locType;
    }

    /**
     * @return LocalGeoVisitType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return Location[]
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * @return LocalGeoLocType
     */
    public function getLocType()
    {
        return $this->locType;
    }
}
