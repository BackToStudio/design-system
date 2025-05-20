<?php

namespace PlusQuePro\DesignSystem\Atoms;

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
