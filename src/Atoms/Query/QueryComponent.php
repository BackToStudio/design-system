<?php

namespace BackTo\DesignSystem\Atoms\Query;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class QueryComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->addClass('wp-block-query');

        return parent::getMarkup();
    }
}
