<?php

namespace PQP\DesignSystem\Components\Buttons;

use PQP\DesignSystem\Components\TokenComponent;

class ButtonsComponent extends TokenComponent
{
    public function getMarkup(): string
    {
        $this->addClass(
            'wp-block-buttons flex flex-col md:flex-row items-start gap-7'
        );

        return parent::getMarkup();
    }
}
