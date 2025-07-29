<?php

namespace BackTo\DesignSystem\Atoms\Token;

trait HasBackgroundRepeated
{
    private bool $repeated = false;

    /**
     * @param mixed $repeated
     */
    public function setRepeated(bool $repeated): void
    {
        $this->repeated = $repeated;
    }

    public function isRepeated(): bool
    {
        return $this->repeated;
    }
}
