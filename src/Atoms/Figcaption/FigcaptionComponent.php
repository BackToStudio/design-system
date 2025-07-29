<?php

namespace BackTo\DesignSystem\Atoms\Figcaption;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class FigcaptionComponent extends TokenComponentWithChildren
{
    public function __construct()
    {
        $this->setTagName('figcaption');
    }
}
