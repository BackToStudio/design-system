<?php

namespace PlusQuePro\DesignSystem\Atoms\Heading;

use PlusQuePro\DesignSystem\Atoms\StyleDecorator;

class HeadingSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_+_*]:mt-m [&_+_*]:md:mt-l';
        $className[] = '[*_+_&]:mt-m [*_+_&]:md:mt-l';
        $className[] = '[&.text-caption_+_*]:!mt-xs [&.text-caption_+_*]:md:!mt-xs';

        return join(' ', $className);
    }
}
