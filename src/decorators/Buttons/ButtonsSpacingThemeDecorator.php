<?php

namespace PQP\DesignSystem\Decorators\Buttons;

use PQP\DesignSystem\Decorators\StyleDecorator;

class ButtonsSpacingThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        return '[&_+_*]:mt-m [&_+_*]:md:mt-l [p_+_&]:mt-m [p_+_&]:md:mt-l [ul_+_&]:mt-m [ul_+_&]:md:mt-l [.wp-block-columns_+_&]:md:mt-l [.wp-block-group_+_&]:mt-m [.wp-block-group_+_&]:md:mt-l';
    }
}
