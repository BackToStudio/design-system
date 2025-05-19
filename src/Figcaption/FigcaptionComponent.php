<?php

namespace PlusQuePro\DesignSystem\Figcaption;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class FigcaptionComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->setTagName('figcaption');

        return parent::getMarkup();
    }
}
