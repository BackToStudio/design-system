<?php

namespace BackTo\DesignSystem\Atoms\Figure;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class FigureComponent extends TokenComponentWithChildren
{
    public function __construct()
    {
        $this->setTagName('figure');
    }
}
