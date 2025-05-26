<?php

namespace PlusQuePro\DesignSystem\Atoms\Figcaption;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class FigcaptionComponent extends TokenComponentWithChildren
{
    public function __construct()
    {
        $this->setTagName('figcaption');
    }
}
