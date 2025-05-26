<?php

namespace PlusQuePro\DesignSystem\Atoms\Button;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponentWithChildren;

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
