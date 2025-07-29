<?php

namespace BackTo\DesignSystem\Atoms\Icons;

use BackTo\DesignSystem\Atoms\Token\TokenComponent;

class LinkedinIcon extends TokenComponent
{
	public function getMarkup(): string
	{
		$svg =
			'<svg 
			' .
			$this->prepareAttributes() .
			'
			width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.113281 4.89453H3.28807V16.0063H0.113281V4.89453Z" fill="fill-background"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10.8269 4.89453C8.61172 4.89453 8.23075 5.70252 8.04978 6.48193V4.89453H4.875V16.0063H8.04978V9.65674C8.04978 8.6273 8.60775 8.06933 9.63718 8.06933C10.642 8.06933 11.2246 8.6154 11.2246 9.65674V16.0063H14.3994V10.4504C14.3994 7.27564 13.9858 4.89453 10.8269 4.89453Z" fill="fill-background"/><path fill-rule="evenodd" clip-rule="evenodd" d="M1.70067 4.10107C2.57737 4.10107 3.28807 3.39037 3.28807 2.51367C3.28807 1.63697 2.57737 0.92627 1.70067 0.92627C0.823981 0.92627 0.113281 1.63697 0.113281 2.51367C0.113281 3.39037 0.823981 4.10107 1.70067 4.10107Z" fill="fill-background"/></svg>';
		return $svg;
	}
}
