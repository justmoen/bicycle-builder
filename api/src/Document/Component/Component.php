<?php

namespace App\Document\Component;

use App\Document\Interface\ComponentInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 * @MongoDB\InheritanceType("SINGLE_COLLECTION")
 * @MongoDB\DiscriminatorField("type")
 * @MongoDB\DiscriminatorMap({
 *     Component::COMPONENT_TYPE_FRONT_DERAILLEUR=FrontDerailleur::class,
 *     Component::COMPONENT_TYPE_REAR_DERAILLEUR=RearDerailleur::class,
 *     })
 */
class Component extends AbstractComponent implements ComponentInterface
{
    public const COMPONENT_COLLECTION = 'Component';
    public const COMPONENT_TYPE_UNKNOWN = 'Unknown';
    public const COMPONENT_TYPE_FRONT_DERAILLEUR = 'Front Derailleur';
    public const COMPONENT_TYPE_REAR_DERAILLEUR = 'Rear Derailleur';

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return self::COMPONENT_TYPE_UNKNOWN;
    }
}