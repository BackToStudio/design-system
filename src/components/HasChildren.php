<?php

namespace PQP\DesignSystem\Components;

trait HasChildren
{
    private array $children = [];

    public function addChild(string $html): static
    {
        $this->children[] = $html;

        return $this;
    }

    public function clearChildren(): static
    {
        $this->children = [];

        return $this;
    }

    public function getChildren(): array
    {
        return $this->children;
    }
}
