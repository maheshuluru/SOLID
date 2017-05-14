<?php
/**
*
*/
class Checkout
{

	public function begin(Receipt $receipt)
	{
		$this->acceptCash($receipt);
	}

	private function acceptCash($receipt)
	{
		// accept cash payment here
	}
}