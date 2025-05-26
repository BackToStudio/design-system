<?php

namespace PlusQuePro\DesignSystem\Atoms\Token;

use PlusQuePro\DesignSystem\Atoms\Token\HasChildren;
use PlusQuePro\DesignSystem\Atoms\Token\TokenComponent;

class TokenComponentWithChildren extends TokenComponent
{
    use HasChildren;

    public function getMarkup(): string
    {
        $attributes = $this->prepareAttributes();
        $tagName = $this->getTagName();
        $children = join(' ', $this->getChildren());

        return '<' . $tagName . ' ' . $attributes . '>' . $children . '</' . $tagName . '>';
    }
}
