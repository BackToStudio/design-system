<?php

namespace PlusQuePro\DesignSystem\Atoms\Paragraph;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;

class ParagraphComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->setTagName('p');

        return parent::getMarkup();
    }
}
