<?php

namespace BackTo\DesignSystem\Molecules\PostTemplate;

use BackTo\DesignSystem\Atoms\StyleDecorator;

class TypeDecorator implements StyleDecorator
{
    private string $type = '';

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function getClassName(): string
    {
        $typeClasses = [
            'default' => '',
            'grid' => 'grid',
        ];

        $className = '';

        if (!empty($this->type) && array_key_exists($this->type, $typeClasses)) {
            $className = $typeClasses[$this->type];
        }

        return $className;
    }
}
