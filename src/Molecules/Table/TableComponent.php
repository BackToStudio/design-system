<?php

namespace PlusQuePro\DesignSystem\Molecules\Table;

use PlusQuePro\DesignSystem\TokenComponentWithChildren;

class TableComponent extends TokenComponentWithChildren
{
    private TokenComponentWithChildren $table;
    private TokenComponentWithChildren $thead;
    private TokenComponentWithChildren $tbody;
    private TokenComponentWithChildren $tfoot;

    private bool $fixedLayout = false;

    public function __construct()
    {
        $this->table = new TokenComponentWithChildren();
        $this->thead = new TokenComponentWithChildren();
        $this->tbody = new TokenComponentWithChildren();
        $this->tfoot = new TokenComponentWithChildren();
    }

    public function getTable(): TokenComponentWithChildren
    {
        return $this->table;
    }

    public function getThead(): TokenComponentWithChildren
    {
        return $this->thead;
    }

    public function getTbody(): TokenComponentWithChildren
    {
        return $this->tbody;
    }

    public function getTfoot(): TokenComponentWithChildren
    {
        return $this->tfoot;
    }

    public function setFixedLayout(bool $fixedLayout): void
    {
        $this->fixedLayout = $fixedLayout;
    }

    public function getFixedLayout(): bool
    {
        return $this->fixedLayout;
    }

    public function getMarkup(): string
    {
        $this->setTagName('figure');
        $this->getTable()->setTagName('table');

        $this->getThead()->setTagName('thead');
        $this->getTbody()->setTagName('tbody');
        $this->getTfoot()->setTagName('tfoot');

        $this->getTable()->addChild($this->getThead()->getMarkup());
        $this->getTable()->addChild($this->getTbody()->getMarkup());
        $this->getTable()->addChild($this->getTfoot()->getMarkup());

        $this->addChild($this->getTable()->getMarkup());

        return parent::getMarkup();
    }
}
