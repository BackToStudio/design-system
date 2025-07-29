<?php

namespace BackTo\DesignSystem\Atoms\Heading;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class HeadingComponent extends TokenComponentWithChildren
{
    private int $level = 2;

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getMarkup(): string
    {
        $this->setTagName('h' . $this->getLevel());
        $this->addClass('wp-block-heading');

        return parent::getMarkup();
    }
}
