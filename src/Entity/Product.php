<?php

namespace CommonBundle\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\MappedSuperclass]
abstract class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\Column(type: UuidType::NAME, unique: true)]
    #[ORM\CustomIdGenerator(class: UuidGenerator::class)]
    protected ?Uuid $id = null;

    #[Assert\Type('string')]
    #[Assert\Length(max: 255)]
    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[ORM\Column(type: Types::STRING, length: 255)]
    protected ?string $name = null;

    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[Assert\Regex(
        pattern: '/^\d{1,5}(\.\d{1,2})?$/',
        message: 'Price must be a number with up to 2 decimal places and max 7 digits total.'
    )]
    #[ORM\Column(type: Types::DECIMAL, precision: 7, scale: 2)]
    protected ?string $price = null;

    #[Assert\Type('integer')]
    #[Assert\Positive]
    #[Assert\NotNull]
    #[ORM\Column(type: Types::INTEGER)]
    protected ?int $quantity = null;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): static
    {
        $this->quantity = $quantity;
        return $this;
    }
}