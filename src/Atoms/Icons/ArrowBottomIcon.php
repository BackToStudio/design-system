<?php

namespace BackTo\DesignSystem\Atoms\Icons;

use BackTo\DesignSystem\Atoms\Token\TokenComponent;

class ArrowBottomIcon extends TokenComponent
{
    public function getMarkup(): string
    {
        $svg =
            '<svg 
			' .
            $this->prepareAttributes() .
            '
			width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16.2398 9.28027L11.8219 13.8784L7.404 9.28027L6.04688 10.6959L11.8219 16.7197L17.5969 10.6959L16.2398 9.28027Z" fill="currentColor"/></svg>';

        return $svg;
    }
}
