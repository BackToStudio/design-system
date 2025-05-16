<?php

namespace PlusQuePro\DesignSystem\Table;

use PlusQuePro\DesignSystem\TokenComponent;

class TableComponent extends TokenComponent
{
	private TokenComponent $table;
	private TokenComponent $thead;
	private TokenComponent $tbody;
	private TokenComponent $tfoot;

	private bool $fixedLayout = false;

	public function __construct()
	{
		$this->table = new TokenComponent();
		$this->thead = new TokenComponent();
		$this->tbody = new TokenComponent();
		$this->tfoot = new TokenComponent();
	}

	public function getTable(): TokenComponent
	{
		return $this->table;
	}

	public function getThead(): TokenComponent
	{
		return $this->thead;
	}

	public function getTbody(): TokenComponent
	{
		return $this->tbody;
	}

	public function getTfoot(): TokenComponent
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
		$this->table->setTagName('table');

		$this->thead->setTagName('thead');
		$this->tbody->setTagName('tbody');
		$this->tfoot->setTagName('tfoot');

		$this->table->addChild($this->getThead()->getMarkup());
		$this->table->addChild($this->getTbody()->getMarkup());
		$this->table->addChild($this->getTfoot()->getMarkup());

		$this->addChild($this->table->getMarkup());

		return parent::getMarkup();
	}
}
