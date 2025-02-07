<?php

namespace PlusQuePro\DesignSystem\Button;

use PlusQuePro\DesignSystem\TokenComponent;

class ButtonComponent extends TokenComponent
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
