<?php

namespace PQP\DesignSystem\Components\Button;

use PQP\DesignSystem\Components\TokenComponent;

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
