<?php

namespace BackTo\DesignSystem\Atoms\Token;

trait HasOpacity
{
    private int $opacity = 0;

    public function setOpacity(int $opacity): static
    {
        $this->opacity = $opacity;
        return $this;
    }

    public function getOpacity(): int
    {
        return $this->opacity;
    }
}
