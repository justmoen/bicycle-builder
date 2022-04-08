<?php

namespace App\Document\Interface;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

interface ComponentInterface
{
    /**
     * @return string
     */
    function getId(): string;

    /**
     * @MongoDB\PrePersist
     */
    public function onPrePersist();

    /**
     * @MongoDB\PreUpdate
     */
    public function onPreUpdate();

    /**
     * @return float
     */
    public function getPrice(): float;

    /**
     * @param float $price
     * @return ComponentInterface
     */
    public function setPrice(float $price): ComponentInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return ComponentInterface
     */
    public function setName(string $name): ComponentInterface;

    /**
     * @return float
     */
    public function getWeight(): float;

    /**
     * @param float $weight
     * @return ComponentInterface
     */
    public function setWeight(float $weight): ComponentInterface;
}