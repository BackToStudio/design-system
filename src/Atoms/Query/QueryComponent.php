<?php

namespace PlusQuePro\DesignSystem\Atoms\Query;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;

class QueryComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->addClass('wp-block-query');

        return parent::getMarkup();
    }
}
