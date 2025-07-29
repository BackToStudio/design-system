<?php

namespace BackTo\DesignSystem\Atoms\PostTerms;

use BackTo\DesignSystem\Atoms\Token\TokenComponentWithChildren;

class PostTermsComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->addClass('wp-block-post-terms');

        return parent::getMarkup();
    }
}
