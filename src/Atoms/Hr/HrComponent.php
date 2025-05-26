<?php

namespace PlusQuePro\DesignSystem\Atoms\Hr;

use PlusQuePro\DesignSystem\Atoms\Token\TokenComponent;

class HrComponent extends TokenComponent
{
    public function getMarkup(): string
    {
        $this->setTagName('hr');
        $this->addClass('wp-block-separator');

        return parent::getMarkup();
    }
}
