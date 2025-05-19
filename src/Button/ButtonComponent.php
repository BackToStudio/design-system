<?php

namespace PlusQuePro\DesignSystem\Button;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

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
