<?php

namespace BackTo\DesignSystem\Molecules\Details;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class DetailsBehaviourDecorator implements StyleDecorator
{
    public function getClassName(): string
    {
        $classNames = 'pointer-events-auto text-foreground';
        $classNames .= ' [&_svg]:open:rotate-[180deg]';
        $classNames .= ' [&_[class*="wrapper"]_>_*]:max-w-full';
        // Les animations sont maintenant gérées par CSS avec @keyframes dans index.scss du theme

        return $classNames;
    }
}
