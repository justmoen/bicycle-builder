<?php

namespace App\Document\Component;

use App\Document\Interface\ComponentInterface;
use DateTime;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

abstract class AbstractComponent implements ComponentInterface
{
    /**
     * @MongoDB\Id
     */
    protected string $id;

    /**
     * @MongoDB\Field(type="float")
     */
    protected float $price;

    /**
     * @MongoDB\Field(type="string")
     */
    protected string $name;

    /**
     * @MongoDB\Field(type="float")
     */
    protected float $weight;

    /**
     * @var DateTime
     */
    protected DateTime $createdAt;

    /**
     * @var DateTime
     */
    protected DateTime $updatedAt;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    abstract public function getType(): string;

    /**
     * @MongoDB\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * @MongoDB\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new DateTime();
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return AbstractComponent
     */
    public function setPrice(float $price): AbstractComponent
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return AbstractComponent
     */
    public function setName(string $name): AbstractComponent
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return AbstractComponent
     */
    public function setWeight(float $weight): AbstractComponent
    {
        $this->weight = $weight;
        return $this;
    }
}