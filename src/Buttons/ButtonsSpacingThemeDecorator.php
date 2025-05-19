<?php

namespace PlusQuePro\DesignSystem\Buttons;

use PlusQuePro\DesignSystem\StyleDecorator;

class ButtonsSpacingThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_+_*]:mt-m [&_+_*]:md:mt-l';
        $className[] = '[p_+_&]:mt-m [p_+_&]:md:mt-l';
        $className[] = '[ul_+_&]:mt-m [ul_+_&]:md:mt-l';
        $className[] = '[.wp-block-columns_+_&]:md:mt-l';
        $className[] = '[.wp-block-group_+_&]:mt-m [.wp-block-group_+_&]:md:mt-l';

        return join(' ', $className);
    }
}
