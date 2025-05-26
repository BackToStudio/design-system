<?php

namespace PlusQuePro\DesignSystem\Atoms\Figure;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class FigureComponent extends TokenComponentWithChildren
{
    public function __construct()
    {
        $this->setTagName('figure');
    }
}
