<?php

namespace BackTo\DesignSystem\Atoms\Icons;

use BackTo\DesignSystem\Atoms\Token\TokenComponent;

class FacebookIcon extends TokenComponent
{
	public function getMarkup(): string
	{
		$svg =
			'<svg 
			' .
			$this->prepareAttributes() .
			'
			width="12" height="22" viewBox="0 0 12 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.61201 21.446V11.9216H10.7868L11.5805 7.95312H7.61201V6.36572C7.61201 4.77832 8.4073 3.98462 9.99311 3.98462H11.5805V0.0161133C10.7868 0.0161133 9.80262 0.0161133 8.40572 0.0161133C5.48888 0.0161133 3.64353 2.30277 3.64353 5.57202V7.95312H0.46875V11.9216H3.64353V21.446H7.61201Z" fill="fill-background"/></svg>';
		return $svg;
	}
}
