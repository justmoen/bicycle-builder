<?php

namespace App\Document\Component;

use App\Document\Interface\ComponentInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document */
class FrontDerailleur extends AbstractDerailleur implements ComponentInterface
{
    public const PULL_TYPE_UP = 'UP';
    public const PULL_TYPE_DOWN = 'DOWN';

    /**
     * @MongoDB\Field(type="string")
     */
    private string $pullType = '';

    /**
     * @return string
     */
    public function getType(): string
    {
        return parent::COMPONENT_TYPE_FRONT_DERAILLEUR;
    }

    /**
     * @return string
     */
    public function getPullType(): string
    {
        return $this->pullType;
    }

    /**
     * @param string $pullType
     * @return FrontDerailleur
     */
    public function setPullType(string $pullType): FrontDerailleur
    {
        $this->pullType = $pullType;
        return $this;
    }
}