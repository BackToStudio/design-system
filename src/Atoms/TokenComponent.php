<?php

namespace PlusQuePro\DesignSystem\Atoms;

class TokenComponent implements AtomComponentInterface
{
    use HasClasses;
    use HasAttributes;
    use HasCustomStyles;

    private string $tagName = 'div';
    /**
     * @var StyleDecorator[]
     */
    private array $decorators = [];

    public function addDecorator(StyleDecorator $decorator): void
    {
        $this->decorators[] = $decorator;
    }

    public function applyDecorators(): void
    {
        foreach ($this->decorators as $decorator) {
            $this->addClass($decorator->getClassName());
        }
    }

    public function getTagName(): string
    {
        return $this->tagName;
    }

    public function setTagName(string $tagName): static
    {
        $this->tagName = $tagName;

        return $this;
    }

    public function getMarkup(): string
    {
        $attributes = $this->prepareAttributes();
        $tagName = $this->getTagName();

        // Balise auto-fermante
        return '<' . $tagName . ' ' . $attributes . '/>';
    }

    public function prepareAttributes(): string
    {
        $this->applyDecorators();

        $classes = $this->getClasses();

        if (count($classes) > 0) {
            $this->addAttribute('class', join(' ', $classes));
        }

        $attributes = '';
        foreach ($this->getAttributes() as $attribute => $value) {
            $attributes .=
                $this->escapeAttribute($attribute) .
                '="' .
                $this->escapeAttribute($value) .
                '" ';
        }

        return $attributes;
    }

    public function escapeAttribute(string $value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}
