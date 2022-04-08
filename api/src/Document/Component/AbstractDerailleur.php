<?php

namespace App\Document\Component;

use App\Document\Interface\ComponentInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

abstract class AbstractDerailleur extends Component implements ComponentInterface
{
    /**
     * @MongoDB\Field(type="int")
     */
    protected int $maxCogCount = 0;

    /**
     * @MongoDB\Field(type="int")
     */
    protected int $minCogSize = 0;

    /**
     * @MongoDB\Field(type="int")
     */
    protected int $maxCogSize = 0;

    /**
     * @return int
     */
    public function getMaxCogCount(): int
    {
        return $this->maxCogCount;
    }

    /**
     * @param int $maxCogCount
     * @return AbstractDerailleur
     */
    public function setMaxCogCount(int $maxCogCount): AbstractDerailleur
    {
        $this->maxCogCount = $maxCogCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinCogSize(): int
    {
        return $this->minCogSize;
    }

    /**
     * @param int $minCogSize
     * @return AbstractDerailleur
     */
    public function setMinCogSize(int $minCogSize): AbstractDerailleur
    {
        $this->minCogSize = $minCogSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxCogSize(): int
    {
        return $this->maxCogSize;
    }

    /**
     * @param int $maxCogSize
     * @return AbstractDerailleur
     */
    public function setMaxCogSize(int $maxCogSize): AbstractDerailleur
    {
        $this->maxCogSize = $maxCogSize;
        return $this;
    }
}