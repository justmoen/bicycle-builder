<?php

namespace App\Document;

use App\Document\Interface\BicycleInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class ElectricBicycle extends Bicycle implements BicycleInterface
{
    /**
     * @MongoDB\Field(type="float")
     */
    private float $batteryCapacity;

    /**
     * @return string
     */
    public function getType(): string
    {
        return parent::BICYCLE_TYPE_ELECTRIC;
    }

    /**
     * @return float
     */
    public function getBatteryCapacity(): float
    {
        return $this->batteryCapacity;
    }

    /**
     * @param float $batteryCapacity
     * @return ElectricBicycle
     */
    public function setBatteryCapacity(float $batteryCapacity): ElectricBicycle
    {
        $this->batteryCapacity = $batteryCapacity;
        return $this;
    }
}