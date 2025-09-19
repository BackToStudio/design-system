<?php

namespace BackTo\DesignSystem\Atoms\Icons;

use BackTo\DesignSystem\Atoms\Token\TokenComponent;

class AddIcon extends TokenComponent
{
    public function getMarkup(): string
    {
        $svg =
            '<svg 
			' .
            $this->prepareAttributes() .
            '
			width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.096 24.984V.696h5.76v24.288h-5.76ZM.216 15.48V10.2h23.52v5.28H.216Z" fill="currentColor"/>
            </svg>';

        return $svg;
    }
}

