<?php

namespace App\Document;

use App\Document\Interface\BicycleInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 * @MongoDB\InheritanceType("SINGLE_COLLECTION")
 * @MongoDB\DiscriminatorField("type")
 * @MongoDB\DiscriminatorMap({
 *     Bicycle::BICYCLE_TYPE_ELECTRIC=ElectricBicycle::class,
 *     Bicycle::BICYCLE_TYPE_ROAD=RoadBicycle::class,
 *     Bicycle::BICYCLE_TYPE_MOUNTAIN=MountainBicycle::class
 *     })
 */
class Bicycle extends AbstractBicycle implements BicycleInterface
{
    public const BICYCLE_TYPE_ELECTRIC = 'Electric';
    public const BICYCLE_TYPE_ROAD = 'Road';
    public const BICYCLE_TYPE_MOUNTAIN = 'Mountain';
    public const BICYCLE_TYPE_UNDEFINED = 'Undefined';

    /**
     * @return string
     */
    public function getType(): string
    {
        return self::BICYCLE_TYPE_UNDEFINED;
    }
}