<?php

namespace PlusQuePro\DesignSystem\Atoms\PostTerms;

use PlusQuePro\DesignSystem\Atoms\TokenComponentWithChildren;

class PostTermsComponent extends TokenComponentWithChildren
{
    public function getMarkup(): string
    {
        $this->addClass('wp-block-post-terms');

        return parent::getMarkup();
    }
}
