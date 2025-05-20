<?php

namespace PlusQuePro\DesignSystem\Atoms;

trait HasBackgroundParallax
{
    private bool $parallax = false;

    /**
     * @param mixed $parallax
     */

    public function setParallax(bool $parallax): void
    {
        $this->parallax = $parallax;
    }

    public function hasParallax(): bool
    {
        return $this->parallax;
    }
}
