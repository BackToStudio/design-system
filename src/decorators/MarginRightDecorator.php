<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class MarginRightDecorator implements StyleDecorator
{
	private string $margin = '';

	public function __construct(string $margin)
	{
		$this->margin = $margin;
	}

	public function getClassName(): string
	{
		$spacingRightClasses = [
			'var:preset|spacing|zero' => 'mr-0',
			'var:preset|spacing|2xs' => 'mr-2xs',
			'var:preset|spacing|xs' => 'mr-xs',
			'var:preset|spacing|s' => 'mr-s',
			'var:preset|spacing|m' => 'mr-m',
			'var:preset|spacing|l' => 'mr-l',
			'var:preset|spacing|xl' => 'mr-xl',
			'var:preset|spacing|2xl' => 'mr-2xl',
			'var:preset|spacing|3xl' => 'mr-3xl',
			'var:preset|spacing|4xl' => 'mr-4xl',
			'var:preset|spacing|5xl' => 'mr-5xl',
		];

		$className = '';

		if (
			!empty($this->margin) &&
			array_key_exists($this->margin, $spacingRightClasses)
		) {
			$className = $spacingRightClasses[$this->margin];
		}

		return $className;
	}
}
