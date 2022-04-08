<?php

namespace App\Document\Component;

use App\Document\Interface\ComponentInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class RearDerailleur extends AbstractDerailleur implements ComponentInterface
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return parent::COMPONENT_TYPE_REAR_DERAILLEUR;
    }
}