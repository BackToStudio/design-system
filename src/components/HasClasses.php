<?php

namespace PQP\DesignSystem\Components;

trait HasClasses
{
    private array $classes = [];

    public function addClass(string $classnames): static
    {
        $arrayClassnames = $this->convertClassesToArray($classnames);
        foreach ($arrayClassnames as $classname) {
            if (!$this->hasClass($classname)) {
                $this->classes[] = $classname;
            }
        }

        return $this;
    }

    public function getClasses(): array
    {
        return $this->classes;
    }

    public function removeClass(string $classnameToRemove): static
    {
        if ($this->hasClass($classnameToRemove)) {
            $this->classes = array_filter($this->classes, function ($classname) use (
                $classnameToRemove
            ) {
                return $classname !== $classnameToRemove;
            });
        }

        return $this;
    }

    public function hasClass(string $classname): bool
    {
        return in_array($classname, $this->getClasses());
    }

    public function convertClassesToString(array $classes): string
    {
        return join(' ', $classes);
    }

    public function convertClassesToArray(string $classes): array
    {
        return explode(' ', $classes);
    }

    public function clearClasses(): static
    {
        $this->classes = [];

        return $this;
    }
}
