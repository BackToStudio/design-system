<?php

namespace PlusQuePro\DesignSystem\Figure;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class FigureComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->setTagName('figure');

        return parent::getMarkup();
    }
}
