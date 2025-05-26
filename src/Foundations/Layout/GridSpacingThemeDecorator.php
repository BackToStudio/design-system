<?php

namespace PlusQuePro\DesignSystem\Foundations\Layout;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class GridSpacingThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return 'gap-xs md:gap-s lg:gap-lg [&_+_*]:mt-xs [&_+_*]:md:mt-s [&_+_*]:lg:mt-l';
    }
}
