<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class PaddingBottomDecorator implements StyleDecorator
{
	private string $padding = '';

	public function __construct(string $padding)
	{
		$this->padding = $padding;
	}

	public function getClassName(): string
	{
		$spacingBottomClasses = [
			'var:preset|spacing|zero' => 'pb-0',
			'var:preset|spacing|2xs' => 'pb-2xs',
			'var:preset|spacing|xs' => 'pb-xs',
			'var:preset|spacing|s' => 'pb-s',
			'var:preset|spacing|m' => 'pb-m',
			'var:preset|spacing|l' => 'pb-l',
			'var:preset|spacing|xl' => 'pb-xl',
			'var:preset|spacing|2xl' => 'pb-2xl',
			'var:preset|spacing|3xl' => 'pb-3xl',
			'var:preset|spacing|4xl' => 'pb-4xl',
			'var:preset|spacing|5xl' => 'pb-5xl',
		];

		$className = '';

		if (
			!empty($this->padding) &&
			array_key_exists($this->padding, $spacingBottomClasses)
		) {
			$className = $spacingBottomClasses[$this->padding];
		}

		return $className;
	}
}
