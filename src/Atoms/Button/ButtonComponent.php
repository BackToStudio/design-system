<?php

namespace BackTo\DesignSystem\Atoms\Button;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class ButtonComponent extends TokenComponentWithChildren
{
    public function setType(string $type): void
    {
        $this->addAttribute('type', $type);
    }

    public function getMarkup(): string
    {
        $this->setTagName('button');

        return parent::getMarkup();
    }
}
