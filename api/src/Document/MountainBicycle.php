<?php

namespace App\Document;

use App\Document\Interface\BicycleInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class MountainBicycle extends Bicycle implements BicycleInterface
{
    /**
     * @var bool
     */
    private bool $isRearSuspension;

    /**
     * @return string
     */
    public function getType(): string
    {
        return parent::BICYCLE_TYPE_MOUNTAIN;
    }

    /**
     * @return bool
     */
    public function getIsRearSuspension(): bool
    {
        return $this->isRearSuspension;
    }

    /**
     * @param bool $isRearSuspension
     * @return MountainBicycle
     */
    public function setIsRearSuspension(bool $isRearSuspension): MountainBicycle
    {
        $this->isRearSuspension = $isRearSuspension;
        return $this;
    }
}