<?php

namespace PlusQuePro\DesignSystem\Atoms;

trait HasBackgroundImage
{
    private string $backgroundImage = '';

    /**
     * @param string $url
     */
    public function setBackgroundImage(string $url): static
    {
        $this->backgroundImage = $url;
        return $this;
    }

    public function getBackgroundImage(): string
    {
        return $this->backgroundImage;
    }
}
