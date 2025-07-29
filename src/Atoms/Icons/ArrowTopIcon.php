<?php

namespace BackTo\DesignSystem\Atoms\Icons;

use BackTo\DesignSystem\Atoms\Token\TokenComponent;

class ArrowTopIcon extends TokenComponent
{
    public function getMarkup(): string
    {
        $svg =
            '<svg 
			' .
            $this->prepareAttributes() .
            '
            width="30" height="30" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="arrow_upward"><path id="Vector" d="M8 24L10.82 26.82L22 15.66V40H26V15.66L37.16 26.84L40 24L24 8L8 24Z" fill="currentColor"></path></g></svg>';

        return $svg;
    }
}
