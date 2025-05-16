<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class FlexDecorator implements StyleDecorator
{
	private string $direction = '';

	public function __construct(string $direction)
	{
		$this->direction = $direction;
	}

	public function getClassName(): string
	{
		$flexAlignmentClasses = [
			'horizontal' => 'flex-row',
			'vertical' => 'flex-col',
		];

		$classNames = ['flex'];

		// Applique le style de mise en page
		if (array_key_exists($this->direction, $flexAlignmentClasses)) {
			$classNames[] = $flexAlignmentClasses[$this->direction];
		}

		return join(' ', $classNames);
	}
}
