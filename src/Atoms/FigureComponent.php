<?php

namespace PlusQuePro\DesignSystem\Figure;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;

class FigureComponent extends TokenComponentWithChildren
{
    public function __construct()
    {
        $this->setTagName('figure');
    }
}
