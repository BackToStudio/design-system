<?php

namespace PlusQuePro\DesignSystem\Figcaption;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;

class FigcaptionComponent extends TokenComponentWithChildren
{
    public function __construct()
    {
        $this->setTagName('figcaption');
    }
}
