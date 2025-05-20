<?php

namespace PlusQuePro\DesignSystem\Atoms\Buttons;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;

class ButtonsComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->addClass(
            'wp-block-buttons flex flex-col md:flex-row items-start gap-7'
        );

        return parent::getMarkup();
    }
}
