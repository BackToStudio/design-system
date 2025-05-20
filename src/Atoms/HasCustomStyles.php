<?php

namespace PlusQuePro\DesignSystem\Atoms;

trait HasCustomStyles
{
    private array $styles = [];

    public function addStyles(string $property, string $value): static
    {
        $this->styles[$property] = $value;
        return $this;
    }

    public function getStyles(): string
    {
        $styleString = '';
        foreach ($this->styles as $property => $value) {
            $styleString .= $property . ': ' . $value . '; ';
        }
        return rtrim($styleString);
    }
}
