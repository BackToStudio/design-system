<?php

namespace PlusQuePro\DesignSystem\Decorators;

use PlusQuePro\DesignSystem\StyleDecorator;
 
class FontWeightDecorator implements StyleDecorator
{
	private string $fontWeight;

	public function __construct(string $fontWeight)
	{
		$this->fontWeight = $fontWeight;
	}

	public function getClassName(): string
	{
		$fontWeightClasses = [
			'100' => 'font-thin',
			'200' => 'font-extralight',
			'300' => 'font-light',
			'400' => 'font-normal',
			'500' => 'font-medium',
			'600' => 'font-semibold',
			'700' => 'font-bold',
			'800' => 'font-extrabold',
			'900' => 'font-black',
		];

		$className = '';

		if (
			!empty($this->fontWeight) &&
			array_key_exists($this->fontWeight, $fontWeightClasses)
		) {
			$className = $fontWeightClasses[$this->fontWeight];
		}

		return $className;
	}
}
