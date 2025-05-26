<?php

namespace PlusQuePro\DesignSystem\Atoms\Paragraph;

use PlusQuePro\DesignSystem\StyleDecorator;

class ParagraphSpacingThemeDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_+_*]:mt-xs';
        $className[] = '[*_+_&]:mt-xs';
        $className[] = '[&_+_.wp-block-group]:mt-m';
        $className[] = '[&_+_.wp-block-group]:md:mt-l';
        $className[] = '[&.text-caption_+_*]:!mt-xs';
        $className[] = '[&.text-caption_+_*]:md:!mt-xs';

        return join(' ', $className);
    }
}
