<?php
/**
 * Created by Artem Holovanov.
 * Date: 21.08.2025 12:06.
 */

declare(strict_types=1);

namespace CommonBundle\ValueObject;

use CommonBundle\Entity\Product;
use Symfony\Component\Uid\Uuid;

/**
 * Immutable representation of a Product for async messaging.
 */
final readonly class ProductValue
{
    private function __construct(
        private Uuid   $id,
        private string $name,
        private string $price,
        private int    $quantity,
    ) {}

    public static function fromEntity(Product $product): self
    {
        return new self(
            $product->getId(),
            $product->getName(),
            $product->getPrice(),
            $product->getQuantity()
        );
    }

    public function id(): Uuid
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function price(): string
    {
        return $this->price;
    }

    public function quantity(): int
    {
        return $this->quantity;
    }
}