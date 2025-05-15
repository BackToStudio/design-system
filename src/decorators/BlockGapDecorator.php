<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class BlockGapDecorator implements StyleDecorator
{
	private string $blockGap = '';

	public function __construct(string $blockGap)
	{
		$this->blockGap = $blockGap;
	}

	public function getClassName(): string
	{
		$blockGapClasses = [
			'var:preset|spacing|none' => 'gap-0',
			'var:preset|spacing|2xs' => 'gap-2xs',
			'var:preset|spacing|xs' => 'gap-xs',
			'var:preset|spacing|s' => 'gap-s',
			'var:preset|spacing|m' => 'gap-m',
			'var:preset|spacing|l' => 'gap-l',
			'var:preset|spacing|xl' => 'gap-xl',
			'var:preset|spacing|2xl' => 'gap-2xl',
			'var:preset|spacing|3xl' => 'gap-3xl',
			'var:preset|spacing|4xl' => 'gap-4xl',
			'var:preset|spacing|5xl' => 'gap-5xl',
		];

		$className = '';

		if (
			!empty($this->blockGap) &&
			array_key_exists($this->blockGap, $blockGapClasses)
		) {
			$className = $blockGapClasses[$this->blockGap];
		}

		return $className;
	}
}
