<?php

namespace App\Document;

use App\Document\Interface\BicycleInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class RoadBicycle extends Bicycle implements BicycleInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return parent::BICYCLE_TYPE_ROAD;
    }
}