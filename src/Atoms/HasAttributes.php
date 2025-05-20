<?php

namespace PlusQuePro\DesignSystem\Atoms;

trait HasAttributes
{
    private array $attributes = [];

    public function addAttribute(string $attribute, string $value): static
    {
        $this->attributes[$attribute] = $value;

        return $this;
    }

    public function hasAttribute(string $attributeName): bool
    {
        return array_key_exists($attributeName, $this->attributes);
    }

    protected function getAttributes(): array
    {
        return $this->attributes;
    }

    protected function clearAttributes(): static
    {
        $this->attributes = [];

        return $this;
    }
}
