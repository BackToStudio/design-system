<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;

class BorderRadiusDecorator implements StyleDecorator
{
	private string $borderRadius = '';
	public function __construct(string $borderRadius)
	{
		$this->borderRadius = $borderRadius;
	}

	public function getClassName(): string
	{
		$borderRadiusClasses = [
			'none' => 'rounded-none',
			'xsmall' => 'rounded-xs',
			'small' => 'rounded-sm',
			'medium' => 'rounded-md',
			'large' => 'rounded-lg',
			'full' => 'rounded-full',
			'xl' => 'rounded-xl',
			'4px' => 'rounded-xs',
			'8px' => 'rounded-sm',
			'16px' => 'rounded-md',
			'24px' => 'rounded-lg',
			'32px' => 'rounded-xl',
			'media' => 'rounded-media',
		];

		$className = '';

		// Applique le rayon de bordure
		if (
			!empty($this->borderRadius) &&
			array_key_exists($this->borderRadius, $borderRadiusClasses)
		) {
			$className = $borderRadiusClasses[$this->borderRadius];
		}

		return $className;
	}
}
