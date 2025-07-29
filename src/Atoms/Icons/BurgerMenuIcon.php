<?php

namespace BackTo\DesignSystem\Atoms\Icons;

use BackTo\DesignSystem\Atoms\Token\TokenComponent;

class BurgerMenuIcon extends TokenComponent
{
    public function getMarkup(): string
    {
        $svg =
            '<svg 
		' .
            $this->prepareAttributes() .
            '
		width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.96875C0 1.14032 0.671573 0.46875 1.5 0.46875H22.5C23.3284 0.46875 24 1.14032 24 1.96875C24 2.79718 23.3284 3.46875 22.5 3.46875H1.5C0.671573 3.46875 0 2.79718 0 1.96875ZM0 9.96875C0 9.14032 0.671573 8.46875 1.5 8.46875H22.5C23.3284 8.46875 24 9.14032 24 9.96875C24 10.7972 23.3284 11.4688 22.5 11.4688H1.5C0.671573 11.4688 0 10.7972 0 9.96875ZM1.5 16.4688C0.671573 16.4688 0 17.1403 0 17.9688C0 18.7972 0.671573 19.4688 1.5 19.4688H22.5C23.3284 19.4688 24 18.7972 24 17.9688C24 17.1403 23.3284 16.4688 22.5 16.4688H1.5Z" fill="currentColor"/></svg>';

        return $svg;
    }
}
