<?php

namespace BackTo\DesignSystem\Atoms\Paragraph;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class ParagraphSpacingDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $className = [];
        $className[] = '[&_+_*]:mt-2xs';
        $className[] = '[*_+_&]:mt-2xs';
        $className[] = '[&_+_.wp-block-group]:mt-s';
        $className[] = '[&_+_.wp-block-group]:md:mt-m';
        $className[] = '[&.text-caption_+_*]:!mt-xs';
        $className[] = '[&.text-caption_+_*]:md:!mt-xs';

        return join(' ', $className);
    }
}
