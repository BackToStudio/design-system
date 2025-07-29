<?php

namespace BackTo\DesignSystem\Atoms\Token;

use BackTo\DesignSystem\Atoms\Token\HasChildren;
use BackTo\DesignSystem\Atoms\Token\TokenComponent;

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
